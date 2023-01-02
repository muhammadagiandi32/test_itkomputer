<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>INPUT DATA</h1>

    <form action="#" method="POST" id="form">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="tlp" placeholder="tlp">
        <input type="text" name="komentar" placeholder="komenrtar">
        <button type="submit">kirim</button>
    </form>

    <br>

    <table id="userTable" border="1">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="5%">Nama</th>
                <th width="20%">Email</th>
                <th width="20%">Telep</th>
                <th width="20%">komentar</th>
                <th width="20%">aksi</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(e) {

            $.ajax({
                url: 'get_data.php',
                type: 'get',
                'async': true,
                'global': false,
                //type: 'post',
                dataType: 'JSON',
                success: function(response) {
                    var len = response.length;
                    for (var i = 0; i < len; i++) {
                        var id = response[i].id;
                        var nama = response[i].nama;
                        var email = response[i].email;
                        var telep = response[i].telep;
                        var komentar = response[i].komentar;




                        var tr_str = "<tr>" +
                            "<td align='center'>" + (i + 1) + "</td>" +
                            "<td align='center'>" + nama + "</td>" +
                            "<td align='center'>" + email + "</td>" +
                            "<td align='center'>" + telep + "</td>" +
                            "<td align='center'>" + komentar + "</td>" +
                            "<td align='center'><a href='edit.php?id=" + id + "'>ubah</a></td>" +
                            "<td align='center'><a id='delete' href='delete.php?id=" + id + "'>Delete</a></td>" +


                            "</tr>";

                        $("#userTable tbody").append(tr_str);
                    }

                }
            });
            // $('#delete').on('click', function(e) {

            //     e.preventDefault();

            //     // alert('asdad');

            //     $.ajax({
            //         // type: 'post',
            //         // url: 'post_data.php',
            //         // data: $('#form').serialize(),
            //         success: function(data) {
            //             // console.log(data);
            //             if (data = 200) {
            //                 alert('Data berhasil Masuk');
            //                 location.reload();
            //             } else {
            //                 alert('Data gagal diinput');
            //                 location.reload();
            //             }
            //         }
            //     });

            // });
            $('form').on('submit', function(e) {

                e.preventDefault();

                // alert('asdad');

                $.ajax({
                    type: 'post',
                    url: 'post_data.php',
                    data: $('#form').serialize(),
                    success: function(data) {
                        // console.log(data);
                        if (data = 200) {
                            alert('Data berhasil Masuk');
                            location.reload();
                        } else {
                            alert('Data gagal diinput');
                            location.reload();
                        }
                    }
                });

            });
        });
    </script>
</body>

</html>