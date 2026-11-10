<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Pembayaran SPP</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: system-ui, -apple-system, sans-serif; background-color: #f1f5f9; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .login-card { background: #ffffff; width: 100%; max-width: 420px; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1); border: 1px solid #e2e8f0; }
        .login-header { text-align: center; margin-bottom: 2rem; }
        .login-header h2 { font-size: 1.5rem; color: #0f172a; font-weight: 700; margin-bottom: 0.5rem; }
        .login-header p { font-size: 0.875rem; color: #64748b; }
        .form-group { margin-bottom: 1.25rem; }
        .form-label { display: block; font-size: 0.875rem; font-weight: 600; color: #334155; margin-bottom: 0.5rem; }
        .form-input { width: 100%; padding: 0.65rem 0.85rem; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; }
        .form-input:focus { outline: none; border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37,99,235,0.15); }
        .error-feedback { color: #dc2626; font-size: 0.775rem; margin-top: 0.35rem; }
        .btn-submit { width: 100%; background: #2563eb; color: #fff; padding: 0.75rem; border: none; border-radius: 6px; font-weight: 600; font-size: 0.95rem; cursor: pointer; margin-top: 0.5rem; }
        .btn-submit:hover { background: #1d4ed8; }
        .form-check { display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1.25rem; font-size: 0.875rem; color: #64748b; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <h2>Masuk ke Sistem</h2>
            <p>Sistem Informasi Pembayaran SPP Siswa</p>
        </div>

        <form action="#" method="POST">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-input" 
                       placeholder="Masukkan username" required autofocus>
                <!-- Tampilan Pesan Validasi Error -->
                <div class="error-feedback">Username atau kata sandi tidak cocok.</div>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" id="password" class="form-input" 
                       placeholder="Masukkan kata sandi" required>
            </div>

            <div class="form-check">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Ingat sesi saya</label>
            </div>

            <button type="submit" class="btn-submit">Masuk Sekarang</button>
        </form>
    </div>
</body>
</html>