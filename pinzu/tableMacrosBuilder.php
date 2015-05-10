<?php

header('Content-Type:text/html; charset=utf-8');

class TableMacrosBuilder
{
    private $save_name;//保存文件名字和类型
    private $save_url;//文件保存路劲
    private $get_table_name;//获取数据库表的名字
    private $db_name;//数据库名
    private $data_name_array = array();//存放表名数组
    private $file;

    /**
     * @param unknown $save_name 文件名字及类型
     * @param unknown $db_name 数据名字
     * @param unknown $save_url 文件保存路径
     */
    public function __construct($db_name, $save_name, $save_url)
    {
        $this->save_name = $save_name;
        $this->db_name = $db_name;
        $this->save_url = str_replace("\\", "/", $save_url);
        $this->get_table_list();
    }

    private function get_table_list()
    {
        $i = 0;

        @$use_db = mysql_query("use $this->db_name");

        if (!$use_db) {
            echo "输出库不存在或权限受限";
            exit;
        }
        //查询数据库所有表
        $result = mysql_query("show tables ");
        $row = mysql_fetch_row($result);


        //判断文件是否存在
        if (file_exists("$this->save_url" . "/" . $this->save_name)) {
            echo "文件已存在";
            exit;
        }
        //打开文件
        @$this->file = fopen("$this->save_url" . "/" . $this->save_name, "a");
        if (!$this->file) {
            echo "文件路径错误";
        }

        if (!(@fwrite($this->file, "\r\n"))) {

            echo "文件输入错误";
            //当文件输入错误时退出并删除文件；
            unlink("$this->save_url" . "/" . $this->save_name);
            exit;
        }
        //向文件输入表格名字
        while ($row) {

            $this->get_table_name = "define('T_" . strtoupper($row[0]) . "','" . ucfirst($row[0])
                . "');" . "\r\n";


            if (!(@fwrite($this->file, $this->get_table_name))) {

                echo "文件输入错误";
                //当文件输入错误时退出并删除文件；
                unlink("$this->save_url" . "/" . $this->save_name);
                exit;
            }

            //将所有表明存放到数组里面去
            $this->data_name_array[$i] = $row[0];

            $row = mysql_fetch_row($result);
            $i++;


        }

        //遍历字段提示语：
        if (!(@fwrite($this->file, "\r\n"))) {

            echo "文件输入错误";
            //当文件输入错误时退出并删除文件；
            unlink("$this->save_url" . "/" . $this->save_name);
            exit;
        }

        //通过调用$this->table_desc方法遍历数组
        $this->table_desc($this->data_name_array);
        fclose($this->file);//关闭文件

        echo "文件创建成功";
    }

    /**
     * 通过表数组输出每个表中的字段
     * @param array $list 数据库表数组
     */
    //遍历字段方法
    private function table_desc(array $list)
    {
        $str = "";
        $fields = [];
        for ($i = 0; $i < count($list); $i++) {

            $result_desc = mysql_query("desc $list[$i]");
            $row_desc = mysql_fetch_row($result_desc);

            while ($row_desc) {
                $fields[] = $row_desc[0];

                $row_desc = mysql_fetch_row($result_desc);
            }


        }

        $fields = array_unique($fields);

        foreach ($fields as $field) {
            $str .= sprintf("define('C_%s','%s');\r\n", strtoupper($field), $field);
        }

        if (!(@fwrite($this->file, $str))) {

            echo "文件输入错误";
            //当文件输入错误时退出并删除文件；
            unlink("$this->save_url" . "/" . $this->save_name);
            exit;
        }
    }
}

$conn = mysql_connect("192.168.1.129", "root", "");

$a = new TableMacrosBuilder("py", "macros.php", "D:\\");

?>