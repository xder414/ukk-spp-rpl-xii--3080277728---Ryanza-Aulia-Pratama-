<style>
    .form-card { background: #ffffff; border: 1px solid var(--border); border-radius: 12px; max-width: 600px; margin: 0 auto; overflow: hidden; }
    .form-card-header { padding: 1.25rem 1.75rem; background: var(--primary); color: #fff; font-weight: 700; font-size: 1.1rem; }
    .form-card-body { padding: 2rem 1.75rem; }
    .form-group { margin-bottom: 1.25rem; }
    .form-label { display: block; font-size: 0.875rem; font-weight: 600; color: #334155; margin-bottom: 0.4rem; }
    .form-input { width: 100%; padding: 0.65rem 0.85rem; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem; }
    .form-input:focus { outline: none; border-color: var(--primary); }
    .error-msg { color: var(--danger); font-size: 0.775rem; margin-top: 0.35rem; }
</style>

<div class="form-card">
    <div class="form-card-header">Pendaftaran Akun Petugas Baru</div>
    <div class="form-card-body">
        <form action="#" method="POST">
            <div class="form-group">
                <label class="form-label">Username Akun *</label>
                <input type="text" name="username" class="form-input" placeholder="Masukkan username unik" required autofocus>
                <!-- Tampilan Pesan Validasi Error -->
                <p class="error-msg">Username sudah digunakan.</p>
            </div>

            <div class="form-group">
                <label class="form-label">Nama Lengkap Petugas *</label>
                <input type="text" name="nama_petugas" class="form-input" placeholder="Nama lengkap petugas loket" required>
            </div>

            <div class="form-group">
                <label class="form-label">Hak Akses / Level *</label>
                <select name="level" class="form-input" required>
                    <option value="petugas">Petugas Loket</option>
                    <option value="admin">Administrator</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Kata Sandi (Minimal 6 Karakter) *</label>
                <input type="password" name="password" class="form-input" placeholder="Buat kata sandi akun" required>
            </div>

            <div class="form-group">
                <label class="form-label">Konfirmasi Kata Sandi *</label>
                <input type="password" name="password_confirmation" class="form-input" placeholder="Ulangi kata sandi" required>
            </div>

            <div style="margin-top: 2rem; display: flex; justify-content: space-between; align-items: center;">
                <a href="#" class="btn btn-outline">Batal / Kembali</a>
                <button type="submit" class="btn btn-primary" style="padding: 0.65rem 1.5rem;">Simpan Petugas</button>
            </div>
        </form>
    </div>
</div>