<?php
    require './GoogleLanguage.php';
    //打印函数
    function p($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    //返回数据库实例对象
    function link_mysql()
    {
        $servername = "47.128.212.141";
        $username = "ixxxxxxxx";
        $password = "CMyMFTDF6ssB6r27";
        $dbname = "ixxxxxxxx";
        try {
            // 创建 PDO 实例
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // 设置 PDO 错误模式为异常
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "连接成功";
            return $conn;
        } catch(PDOException $e) {
            // 捕获并显示异常
            echo "连接失败: " . $e->getMessage();
            return false;
        }
    }


    //查询数据结果
    function get_result($conn,$start,$end)
    {
        $sql = "SELECT tag,id FROM xvideo_archive1 ORDER BY id limit {$start},{$end}";
//        $sql = "SELECT tag,id FROM xvideo_archive WHERE id=11";
        // 执行查询示例
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // 设置结果集为关联数组
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    //数据处理
    function data_process($arr)
    {
        $tags = [];
        foreach($arr as $row) {
            $a = explode(',',$row['tag']);
            array_pop($a);
            array_pop($a);
            $tags = array_merge($tags,$a);
        }
        p($tags);
        $googleObj = new GoogleLanguage();
        //p($googleObj);
        //$languageCode = $googleObj->getLanguageCode(['Anal Vids Trailers 897k']);
        //p($languageCode);

        echo '<hr />';
        //p($tags);
        $uniqueTags = array_unique($tags);
//        p($uniqueTags);
        //echo count($uniqueTags);
        return $uniqueTags;

    }


    //存入数据库
    function save_data($conn,$data)
    {
        p($data);
        echo count($data);

        try {
            //执行插入操作
            foreach($data as $tag)
            {
                $sql = "INSERT INTO xn_tag (name) VALUES ('{$tag}')";
                echo $sql;
                $stmt = $conn->prepare($sql);
                $stmt->execute();
            }
        }catch (PDOException $e) {
            echo $e->getMessage();
        }

    }













