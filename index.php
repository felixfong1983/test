<?php
/*
 * 47.128.212.141
 * ixxxxxxxx
 * CMyMFTDF6ssB6r27
 * */
include_once './functions.php';

$conn = link_mysql();

//p($conn);

$result = get_result($conn,0,10);
p($result);


$data = data_process($result);
p($data);
//save_data($conn,$data);








die;
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

    // 执行查询示例
    $stmt = $conn->prepare("SELECT tag,id FROM xvideo_archive limit 0,10");
    $stmt->execute();

    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $tags = [];
    foreach($stmt->fetchAll() as $row) {
        p($row);
        $a = explode(',',$row['tag']);
        array_pop($a);
        array_pop($a);
        p($a);
        $tags = array_merge($tags,$a);
    }
    echo '<hr />';
//    p($tags);
    $uniqueTags = array_unique($tags);
    p($uniqueTags);
    echo count($uniqueTags);

} catch(PDOException $e) {
    // 捕获并显示异常
    echo "连接失败: " . $e->getMessage();
}

