<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Detail</title>
</head>
<body>
    {{-- {{ dd($id) }} --}}
    @if ($id == 20)
        <h3>วัยเด็ก</h3>
    @elseif($id == 30)
    <h3>วัยรุ่น</h3>
    @elseif($id == 40)
    <h3>วัยทำงาน</h3>
    @elseif($id == 50)
    <h3>วัยผู้ใหญ่</h3>
    @elseif($id == 60)
    <h3>วัยผู้สูงอายุ</h3>
    @elseif($id == 70)
    <h3>วัยชรา</h3>
    @elseif($id == 80)
    <h3>วัยชรามาก</h3>
    @endif
</body>
</html>