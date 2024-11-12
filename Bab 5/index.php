<!DOCTYPE html>  
<html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <title>Website Destinasi Wisata Sumba Timur</title>  
    <link rel="stylesheet" href="style.css">  
</head>  

<!-- Snackbar untuk menampilkan pesan -->
<div id="snackbar"></div>

    <body onload="myFunction()">
        <p id="Tampilkan"></p>
        
    <!-- Navigasi -->  
    <nav id="navbar">  
        <ul>  
           <li><a href="#dashboard" class="nav-link">Beranda</a></li>
            <li><a href="#destinasi-akomodasi" class="nav-link">Destinasi & Akomodasi</a></li>  
            <li><a href="#kontak" class="nav-link">Kontak</a></li>  
            <li id="login-link"><a href="#login" class="nav-link">Login</a></li>  
            <li id="register-link"><a href="#register" class="nav-link">Register</a></li>  
            <li id="logout-link" style="display: none;"><a href="#login" class="nav-link">Logout</a></li>  
            <li><a href="#transaction" class="nav-link">Transaction</a></li>  
        </ul>  
    </nav>  

   <!-- Dashboard Section -->  
<section id="dashboard" class="page">  
    <div class="dashboard-container">  
        <div class="header">  
            <div class="logo-title">  
                <img src="logo.png" alt="Logo" class="logo">  
                <div class="title-text">  
                    <h1>Destinasi Wisata Sumba Timur</h1>  
                    <p>"Ayo Jelajahi Surga Tropis di Pulau yang Menawan"</p>  
                </div>  
            </div>  
            <div class="login-info">  
                <!-- Menampilkan pesan selamat datang setelah login -->
                <p id="welcome-message"></p>
            </div>  
        </div>  
        
        <!-- Gambar Utama dan Carousel -->  
        <div class="main-image">  
            <img src="DER1.jpg" alt="Pemandangan Sumba">  
            <div class="image-carousel">  
                <div class="circle-image">  
                    <img src="DER2.jpg" alt="Bukit Wairinding">  
                </div>  
                <div class="circle-image">  
                    <img src="DER4.jpg" alt="Sunset Pantai Walakiri">  
                </div>  
                <div class="circle-image">  
                    <img src="DER5.jpg" alt="Air Terjun Tanggedu">  
                </div>  
            </div>  
        </div>  
    </div>  
</section>  

    <!-- Destinasi & Akomodasi Section -->  
    <section id="destinasi-akomodasi" class="page">  
        <h2>Destinasi Favorit</h2>  
        <div class="destinasi-container">  
            <div class="destinasi-card">  
                <img src="DER1.jpg" alt="Pantai Walakiri">  
                <h3>Sunset Pantai Prai-Salura</h3>  
                <p>Gambar diatas merupakan fenomena sunset dari pantai prai-salura yang terletak di sumba paling selatan kabupaten Sumba Timur, NTT.</p>  
            </div>  
            <div class="destinasi-card">  
                <img src="DER2.jpg" alt="Air Terjun Tanggedu">  
                <h3>Pantai Pulau Salura</h3>  
                <p>Pantai Pulau Salura dikenal dengan pantai yang sangat indah dengan warna pantai yang khas dan jernih disertai pasir putih yang halus.</p>  
            </div>  
            <div class="destinasi-card">  
                <img src="DER5.jpg" alt="Bukit Tenau">  
                <h3>Bukit Hiliwuku</h3>  
                <p>Bukit Hiliwuku menawarkan pemandangan bukit hijau dan savana luas, ideal untuk menikmati matahari terbit dan terbenam.</p>  
            </div>  
        </div>  

        <h2>Akomodasi</h2>  
        <div class="akomodasi-container">  
            <div class="akomodasi-card">  
                <img src="padadita.jpg" alt="Padadita Beach Hotel">  
                <h3>Padadita Beach Hotel</h3>  
                <p>Hotel di depan pantai dengan pemandangan laut indah, terletak di Waingapu, Sumba Timur, Nusa Tenggara Timur.</p>  
            </div>  
            <div class="akomodasi-card">  
                <img src="kambaniru.jpg" alt="Kambaniru Beach Hotel">  
                <h3>Kambaniru Beach Hotel</h3>  
                <p>Resort yang mengangkat budaya sumba dengan tema bangunan tradisional, terletak di tengah alam yang indah.</p>  
            </div>  
        </div>  
    </section>  

    <!-- Kontak Section -->  
    <section id="kontak" class="page">  
        <h2>Kontak</h2>  
        <p>Ini adalah bagian kontak kami.</p>  
    </section>  

    <!-- Login Section -->  
    <section id="login" class="page active">  
        <div class="login-container">  
            <h1>Selamat Datang!</h1>  
            <div class="login-form">  
                <h2>Login</h2>  
                <form id="loginForm">  
                    <div class="form-group">  
                        <label for="username">Username</label>  
                        <input type="text" id="username" name="username" placeholder="Username">  
                    </div>  
                    <div class="form-group">  
                        <label for="password">Password</label>  
                        <input type="password" id="password" name="password" placeholder="Password" >  
                    </div>  
                    <div class="form-group">
                        <input type="checkbox" id="robot-check" name="robot-check" >
                        <label for="robot-check">Saya bukan robot</label>
                    <button type="submit">Sign in</button>
                </form>
            </div>
            <div class="register-info">  
                <p>Belum punya akun? <a href="#register.php" class="register-link">Register</a></p>  
            </div>  
        </div>  
    </section>  

    <!-- Register Section -->  
    <section id="register" class="page">  
        <h2>Register</h2>  
        <form action="#dashboard.php" method="get">  
            <div class="form-group">  
                <label for="new-username">Username</label>  
                <input type="text" id="new-username" name="new-username" placeholder="Username" >  
            </div>  
            <div class="form-group">  
                <label for="new-password">Password</label>  
                <input type="password" id="new-password" name="new-password" placeholder="Password" >  
            </div>  
            <button type="submit">Register</button>  
        </form>  
    </section>  

    <!-- Transaction Section -->  
    <section id="transaction" class="page">  
        <div class="transaction-container">  
            <h1>Transaction</h1>  
            <button class="tambah-data">Tambah Data</button>  
            <table class="data-table">  
                <thead>  
                    <tr>  
                        <th>Nama</th>  
                        <th>Jenis Tiket Hotel</th>  
                        <th>Harga</th>  
                        <th>Tanggal</th>  
                        <th>Action</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    <tr>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td></td>  
                        <td><a href="#.php" class="edit-link">Edit</a> | <a href="#.php" class="delete-link">Hapus</a></td>  
                    </tr>  
                </tbody>  
            </table>  
            <div class="input-transaction" style="display:none">  
                <h2>Input Transaction</h2>  
                <form id="transactionForm">  
                    <div class="form-group">  
                        <label for="nama">Nama Hotel</label>  
                        <input type="text" id="nama" name="nama" placeholder="Nama" >  
                    </div>  
                    <div class="form-group">  
                        <label for="jenis">Jenis Tiket Hotel</label>  
                        <input type="text" id="jenis" name="jenis" placeholder="Jenis" >  
                    </div>  
                    <div class="form-group">  
                        <label for="harga">Harga</label>  
                        <input type="number" id="harga" name="harga" placeholder="Harga" >  
                    </div>  
                    <div class="form-group">  
                        <label for="tanggal">Tanggal</label>  
                        <input type="date" id="tanggal" name="tanggal" >  
                    </div>  
                    <button type="submit">Simpan</button>  
                </form>  
            </div>  
        </div>  
    </section>  

    <!-- JavaScript untuk navigasi dan login -->  
    <script>  
        const links = document.querySelectorAll('nav ul li a');  
        const pages = document.querySelectorAll('.page');  
        const navbar = document.getElementById('navbar');  
        const loginForm = document.getElementById('loginForm');  
        const registerLink = document.querySelector('.register-link');  
        const logoutLink = document.getElementById('logout-link');  
        const loginLink = document.getElementById('login-link');  
        const registerMenuLink = document.getElementById('register-link');  
        const tambahDataButton = document.querySelector('.tambah-data');  
        const transactionForm = document.getElementById('transactionForm');  
        const inputTransaction = document.querySelector('.input-transaction');  

        // Sembunyikan navbar saat login pertama kali  
        navbar.style.display = 'none';  

        links.forEach(link => {  
            link.addEventListener('click', function(e) {  
                e.preventDefault();  
                const target = e.target.getAttribute('href').substring(1);  
                pages.forEach(page => {  
                    page.classList.remove('active');  
                    page.style.display = 'none';  
                });  
                const targetPage = document.getElementById(target);  
                targetPage.classList.add('active');  
                targetPage.style.display = 'block';  
            });  
        });  

        pages.forEach(page => {  
            if (!page.classList.contains('active')) {  
                page.style.display = 'none';  
            }  
        });  
function myFunction() {
        document.getElementById(
          "Tampilkan"
        ).innerHTML = `Website Destinasi Wisata Sumba Timur Telah Ditampilkan `;
      }

        // Event listener untuk form login  
        loginForm.addEventListener('submit', function(e) {  
            e.preventDefault(); // Mencegah form dari submit default  

            // Ambil nilai username dari input form login
            const username = document.getElementById('username').value;

            // Tampilkan navbar setelah login berhasil  
            navbar.style.display = 'flex';  
            loginLink.style.display = 'none';  
            registerMenuLink.style.display = 'none';  
            logoutLink.style.display = 'block';  

            // Tampilkan pesan selamat datang beserta nama pengguna
            const welcomeMessage = document.getElementById('welcome-message');
            welcomeMessage.textContent = `Selamat datang, ${username}!`;

            // Pindah ke dashboard setelah login berhasil  
            pages.forEach(page => {  
                page.classList.remove('active');  
                page.style.display = 'none';  
            });  
            document.getElementById('dashboard').classList.add('active');  
            document.getElementById('dashboard').style.display = 'block';  
        });  

        // Event listener untuk link register  
        registerLink.addEventListener('click', function(e) {  
            e.preventDefault(); // Mencegah link default  
            pages.forEach(page => {  
                page.classList.remove('active');  
                page.style.display = 'none';  
            });  
            document.getElementById('register').classList.add('active');  
            document.getElementById('register').style.display = 'block';  
        });  

        // Event listener untuk link logout  
        logoutLink.addEventListener('click', function(e) {  
            e.preventDefault(); // Mencegah link default  
            // Sembunyikan navbar saat logout  
            navbar.style.display = 'none';  
            loginLink.style.display = 'block';  
            registerMenuLink.style.display = 'block';  
            logoutLink.style.display = 'none';  

            // Kembali ke halaman login  
            pages.forEach(page => {  
                page.classList.remove('active');  
                page.style.display = 'none';  
            });  
            document.getElementById('login').classList.add('active');  
            document.getElementById('login').style.display = 'block';  
        });  

        // Event listener untuk tombol tambah data  
        tambahDataButton.addEventListener('click', function() {  
            inputTransaction.style.display = 'block'; // Tampilkan form input data  
        });  

        // Event listener untuk form transaction  
        transactionForm.addEventListener('submit', function(e) {  
            e.preventDefault(); // Mencegah form dari submit default  

            // Ambil data dari form input  
            const nama = document.getElementById('nama').value;  
            const jenis = document.getElementById('jenis').value;  
            const harga = document.getElementById('harga').value;  
            const tanggal = document.getElementById('tanggal').value;  

            // Tambahkan data baru ke tabel  
            const tableBody = document.querySelector('.data-table tbody');  
            const newRow = tableBody.insertRow();  
            newRow.insertCell().textContent = nama;  
            newRow.insertCell().textContent = jenis;  
            newRow.insertCell().textContent = harga;  
            newRow.insertCell().textContent = tanggal;  
            newRow.insertCell().innerHTML = `<a href="#.php" class="edit-link">Edit</a> | <a href="#.php" class="delete-link">Hapus</a>`;  

            // Sembunyikan form input data setelah submit  
            inputTransaction.style.display = 'none';  
        });  

        // Event listener untuk link edit  
        const editLinks = document.querySelectorAll('.edit-link');  
        editLinks.forEach(link => {  
            link.addEventListener('click', function(e) {  
                e.preventDefault();  
                const row = link.closest('tr');  
                const nama = row.querySelector('td:nth-child(1)').textContent;  
                const jenis = row.querySelector('td:nth-child(2)').textContent;  
                const harga = row.querySelector('td:nth-child(3)').textContent;  
                const tanggal = row.querySelector('td:nth-child(4)').textContent;  

                // Set value form input dengan data yang akan di edit  
                document.getElementById('nama').value = nama;  
                document.getElementById('jenis').value = jenis;  
                document.getElementById('harga').value = harga;  
                document.getElementById('tanggal').value = tanggal;  

                // Tampilkan form input data  
                inputTransaction.style.display = 'block';  

                // Simpan reference ke row yang akan diedit  
                const rowToEdit = row;  

                // Event listener untuk submit form edit  
                transactionForm.addEventListener('submit', function(e) {  
                    e.preventDefault();  

                    // Ambil data baru dari form input  
                    const nama = document.getElementById('nama').value;  
                    const jenis = document.getElementById('jenis').value;  
                    const harga = document.getElementById('harga').value;  
                    const tanggal = document.getElementById('tanggal').value;  

                    // Update data di row yang akan diedit  
                    rowToEdit.querySelector('td:nth-child(1)').textContent = nama;  
                    rowToEdit.querySelector('td:nth-child(2)').textContent = jenis;  
                    rowToEdit.querySelector('td:nth-child(3)').textContent = harga;  
                    rowToEdit.querySelector('td:nth-child(4)').textContent = tanggal;  

                    // Sembunyikan form input data  
                    inputTransaction.style.display = 'none';  
                });  
            });  
        });  

        // Event listener untuk link hapus  
        const deleteLinks = document.querySelectorAll('.delete-link');  
        deleteLinks.forEach(link => {  
            link.addEventListener('click', function(e) {  
                e.preventDefault();  
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {  
                    const row = link.closest('tr');  
                    row.remove();  
                }  
            });  
        }); 
        // Event listener untuk form login  
loginForm.addEventListener('submit', function(e) {  
    e.preventDefault(); // Mencegah form dari submit default  

    // Ambil nilai username dari input form login
    const username = document.getElementById('username').value;

    // Tampilkan alert box untuk konfirmasi login
    alert(`Anda berhasil login sebagai ${username}`);

    // Tampilkan navbar setelah login berhasil  
    navbar.style.display = 'flex';  
    loginLink.style.display = 'none';  
    registerMenuLink.style.display = 'none';  
    logoutLink.style.display = 'block';  

    // Tampilkan pesan selamat datang beserta nama pengguna
    const welcomeMessage = document.getElementById('welcome-message');
    welcomeMessage.textContent = `Selamat datang, ${username}!`;

    // Pindah ke dashboard setelah login berhasil  
    pages.forEach(page => {  
        page.classList.remove('active');  
        page.style.display = 'none';  
    });  
    document.getElementById('dashboard').classList.add('active');  
    document.getElementById('dashboard').style.display = 'block';  
});

// Flag untuk mengecek apakah user sudah login
let isLoggedIn = false;

// Fungsi untuk menampilkan pesan Toast/Snackbar
function showSnackbar(message) {
    const snackbar = document.getElementById('snackbar');
    snackbar.textContent = message;
    snackbar.className = 'show';
    setTimeout(function() {
        snackbar.className = snackbar.className.replace('show', '');
    }, 3000); // Snackbar akan hilang setelah 3 detik
}

// Event listener untuk form login
loginForm.addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah form dari submit default

    // Ambil nilai username, password, dan status checkbox "Saya bukan robot"
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const robotCheck = document.getElementById('robot-check').checked;

    // Validasi input login
    if (username === '') {
        showSnackbar('Tolong masukkan username Anda!');
        isLoggedIn = false; // Set flag menjadi false jika username kosong
        return; // Hentikan eksekusi login
    }
    if (password === '') {
        showSnackbar('Tolong masukkan password Anda!');
        isLoggedIn = false; // Set flag menjadi false jika password kosong
        return; // Hentikan eksekusi login
    }
    if (!robotCheck) {
        showSnackbar('Tolong centang verifikasi "Saya bukan robot"!');
        isLoggedIn = false; // Set flag menjadi false jika checkbox tidak dicentang
        return; // Hentikan eksekusi login
    }

    // Jika validasi berhasil, set flag login menjadi true
    isLoggedIn = true;

    // Tampilkan navbar setelah login berhasil
    navbar.style.display = 'flex';
    loginLink.style.display = 'none';
    registerMenuLink.style.display = 'none';
    logoutLink.style.display = 'block';

    // Tampilkan pesan selamat datang beserta nama pengguna
    const welcomeMessage = document.getElementById('welcome-message');
    welcomeMessage.textContent = `Selamat datang, ${username}!`;

    // Tampilkan pesan sukses login menggunakan snackbar
    showSnackbar('Login berhasil!');

    // Pindah ke dashboard setelah login berhasil
    pages.forEach(page => {
        page.classList.remove('active');
        page.style.display = 'none';
    });
    document.getElementById('dashboard').classList.add('active');
    document.getElementById('dashboard').style.display = 'block';
});

</script>
</body>  
</html>
