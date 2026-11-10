<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pembayaran SPP - SMK RPL</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --bg: #f8fafc;
            --surface: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --success: #16a34a;
            --danger: #dc2626;
            --warning: #d97706;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: system-ui, -apple-system, sans-serif; background-color: var(--bg); color: var(--text-main); line-height: 1.5; }
        .navbar { background-color: var(--surface); border-bottom: 1px solid var(--border); padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        .navbar-brand { font-weight: 700; font-size: 1.15rem; color: var(--primary); text-decoration: none; }
        .nav-links { display: flex; gap: 1.5rem; list-style: none; align-items: center; }
        .nav-link { color: var(--text-muted); text-decoration: none; font-size: 0.925rem; font-weight: 500; }
        .nav-link:hover, .nav-link.active { color: var(--primary); font-weight: 600; }
        .container { max-width: 1000px; margin: 2rem auto; padding: 0 1.5rem; }
        .alert { padding: 1rem 1.25rem; border-radius: 8px; margin-bottom: 1.5rem; font-size: 0.95rem; }
        .alert-success { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
        .alert-danger { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }
        .badge { display: inline-block; padding: 0.25rem 0.6rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; }
        .badge-admin { background: #fee2e2; color: #991b1b; }
        .badge-petugas { background: #fef3c7; color: #92400e; }
        .btn { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.875rem; font-weight: 600; text-decoration: none; border: 1px solid transparent; cursor: pointer; }
        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-dark); }
        .btn-outline { background: transparent; border-color: var(--border); color: var(--text-main); }
        .btn-outline:hover { background: #f1f5f9; }
        .card { background: var(--surface); border: 1px solid var(--border); border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <!-- Navigasi Utama -->
    <header class="navbar">
        <a href="#" class="navbar-brand">SPP KEUANGAN RPL</a>
        <nav>
            <ul class="nav-links">
                <li><a href="#" class="nav-link active">Dashboard</a></li>
                <li><a href="#" class="nav-link">+ Tambah Petugas</a></li>
            </ul>
        </nav>
        <div style="display: flex; align-items: center; gap: 1rem;">
            <!-- Informasi Akun -->
            <span style="font-size: 0.875rem;">
                Nama Pengguna
                <span class="badge badge-admin">ADMIN</span>
            </span>
            <form action="#" method="POST" style="display: inline;">
                <button type="submit" class="btn btn-outline" style="padding: 0.35rem 0.75rem;">Keluar</button>
            </form>
        </div>
    </header>

    <main class="container">
        <!-- Area Notifikasi / Alert Sistem -->
        <div class="alert alert-success">Pesan notifikasi sukses tindakan sistem.</div>

        <!-- Area Konten Halaman -->
    </main>
</body>
</html>