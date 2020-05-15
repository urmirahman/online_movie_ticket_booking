<?php
echo '[';

$q = (isset($_GET['q'])) ? trim($_GET['q']) : '';
if ($q != '')
{
	$connStr = mysqli_connect("localhost","root","","bdmdb");
    if ($connStr->connect_error)
        die("");
    $sql = "select * from movies where m_name like '%".$q."%' limit 5";
    $res = $connStr->query($sql);
    $sl = 1;
    while ($row = $res->fetch_assoc()) {
        echo '	{';
        echo '		"id":' . $row['m_id'] . ',';
        echo '		"name":"' . $row['m_name'] . '",';
        echo '		"thumb":"' . $row['m_thumb'] . '",';
        echo '		"rating":"' . $row['m_rating'] . '",';
        echo '		"description":"' . $row['m_desc'] . '"';
        echo '	}';
        if ($sl != $res->num_rows)
        	echo(',');
        $sl++;
    }
    $connStr->close();
}
echo ']';