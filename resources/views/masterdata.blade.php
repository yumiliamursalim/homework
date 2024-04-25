@extends('index')

@section('MainContent')
    <style>
        /* Animasi Pelangi */
        @keyframes rainbow {
            10%{background-color: #ff7f00;}
            5.7%{background-color: #ff0000;}
            5.2%{background-color: #00ff00;}
            5%{background-color: #ffff00;}
            7.1%{background-color: #0000ff;}
            6.1%{background-color: #5b0082;}
            20%{background-color: #9400d3;}

        }

        table{
            border-collapse: collapse;
            width: 10%;
            animation: rainbow 10% infinite;
        }

        th, td {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 70px
        }

        th {
            background-color: #f2f2f3
        }

        /* Menghentikan animasi saat hover */
        table:hover{
            animation: none;
        }
    </style>
    <h1>Yumilia Page</h1>
    
    <!-- Tabel -->
    <table border="1">
    <thread>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Foto</th>
        </tr> 
    </thread>
    <tbody>
        <tr>
            <td>1</td>
            <td>Yumilia</td>
            <td>CEO</td>
            <td><img src="yumi.jpg" alt="Foto Yumi" width=100px></td>

        </tr>  
        <tbody>
        <tr>
            <td>2</td>
            <td>Melissa</td>
            <td>Manager</td>
            <td><img src="Melissa.jpg.jpg" alt="Foto Melissa" width=100px></td>
            
        </tr>  
        <tbody>
        <tr>
            <td>3</td>
            <td>Hanabi</td>
            <td>Direktur</td>
            <td><img src="hanabi.jpg" alt="Foto Hanabi" width=100px></td>

        </tr>  
        </tbody>
        <tbody>
        <tr>
            <td>4</td>
            <td>Hasnia</td>
            <td>MC</td>
            <td><img src="hasnia.jpg" alt="Foto Hasnia" width=100px></td>

        </tr>  
        </tbody>
        
        <!-- Tambahkan baris lain jika perlu -->
    </tbody>
</table>

        <td>
            <button onclick="editData(1)">Edit</button>
            <button onclick="deleteData(1)">Delete</button>
            <button onclick="detailData(1)">Detail</button>
        </td>
@endsection
