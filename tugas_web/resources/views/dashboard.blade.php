<style>
    .welcome-banner { background: #ffffff; border: 1px solid var(--border); padding: 1.75rem; border-radius: 12px; margin-bottom: 2rem; border-left: 6px solid var(--primary); }
    .grid-info { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.25rem; margin-bottom: 2rem; }
    .info-card { background: #ffffff; border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem; }
    .info-title { font-size: 0.85rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase; }
    .info-value { font-size: 1.75rem; font-weight: 700; color: var(--text-main); margin-top: 0.5rem; }
</style>

<div class="welcome-banner">
    <h2 style="font-size: 1.35rem; font-weight: 700;">Selamat Datang di Sistem Pembayaran SPP!</h2>
    <p style="color: var(--text-muted); margin-top: 0.25rem; font-size: 0.95rem;">
        Anda berhasil masuk sebagai: <strong>Nama Petugas</strong> (<span class="badge badge-admin">ADMIN</span>).
    </p>
</div>

<div class="grid-info">
    <div class="info-card">
        <div class="info-title">Status Login</div>
        <div class="info-value" style="color: var(--success); font-size: 1.35rem;">Terautentikasi</div>
        <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: 0.25rem;">Sesi aktif terhubung ke database MySQL.</p>
    </div>
    <div class="info-card">
        <div class="info-title">Menu Cepat</div>
        <div style="margin-top: 1rem; display: flex; gap: 0.5rem;">
            <a href="#" class="btn btn-primary" style="font-size: 0.85rem;">+ Tambah Petugas</a>
        </div>
    </div>
</div>