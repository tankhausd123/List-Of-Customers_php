<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    table{
        border-collapse: collapse;
        width: 100%;
    }
    th, td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #a00d0e;
    }
</style>
<body>
<table border="0">
    <caption><h1> Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Photo</th>
    </tr>

<?php
$customerlist = [
    1=>['name' => 'Vương Trung Kiên',
        'birthday' => '13/06/1994',
        'address' => 'số 16- hồ Thiên Nga',
        'photo' => 'cauvang.jpeg'],
    2=>['name' => 'Dương Tuấn Anh',
        'birthday' => '20/03/2001',
        'address' => 'Hồ hoàn Kiếm- Hà Nội',
        'photo' => 'tuananh.jpg'],
    3=>['name' => 'Ngọc Vinh',
        'birthday' => '30/09/1998',
        'address' => 'Thanh Hóa',
        'photo' => 'vinh.jpg'],
    4=>['name' => 'Nguyễn Thị Ngân',
        'birthday' => '20/08/1995',
        'address' => 'Sóc Sơn- Hà Nội',
        'photo' => 'ngan.jpg'],
    5=>['name' => 'Ngô Thành Tân',
        'birthday' => '16/05/1997',
        'address' => 'Bắc Ninh',
        'photo' => 'tan.jpg']
];
foreach ($customerlist as $key => $values){
    echo '<tr>';
    echo '<td>' .$key. '</td>';
    echo '<td>' .$values['name']. '</td>';
    echo '<td>' .$values['birthday']. '</td>';
    echo '<td>' .$values['address']. '</td>';
    echo "<td><image src ='".$values['photo']."' width = '60px' height ='60px'/></td>";
    echo '</tr>';
}
?>
</table>
</body>
</html>
