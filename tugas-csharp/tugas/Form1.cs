using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Crypto.Generators;

namespace tugas
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();

            this.StartPosition = FormStartPosition.CenterScreen;
            this.AcceptButton = button1;
            if (textBox2 != null)
            {
                textBox2.UseSystemPasswordChar = true;
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string username = textBox1.Text.Trim();
            string password = textBox2.Text.Trim();

            if (string.IsNullOrEmpty(username))
            {
                MessageBox.Show("Username tidak boleh kosong!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                textBox1.Focus();
                return;
            }

            if (string.IsNullOrEmpty(password))
            {
                MessageBox.Show("Password tidak boleh kosong!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                textBox2.Focus();
                return;
            }

            string connString = "server=localhost;port=3306;database=db_spp_sekolah_xii;uid=root;pwd=;";

            using (MySqlConnection conn = new MySqlConnection(connString))
            {
                try
                {
                    conn.Open();
                    string query = "SELECT id_petugas, username, nama_petugas, level, password FROM petugas WHERE username = @username";

                    using (MySqlCommand cmd = new MySqlCommand(query, conn))
                    {
                        cmd.Parameters.AddWithValue("@username", username);

                        using (MySqlDataReader reader = cmd.ExecuteReader())
                        {
                            if (reader.Read())
                            {
                                int idPetugas = reader.GetInt32("id_petugas");
                                string dbUsername = reader.GetString("username");
                                string namaPetugas = reader.GetString("nama_petugas");
                                string level = reader.GetString("level");
                                string dbPasswordHash = reader.GetString("password");

                                bool isPasswordValid = false;

                                try
                                {
                           
                                }
                                catch
                                {
                                    if (password == dbPasswordHash)
                                    {
                                        isPasswordValid = true;
                                    }
                                }
                                if (isPasswordValid)
                                {
                                    SessionUser.SetSession(idPetugas, dbUsername, namaPetugas, level);

                                    MessageBox.Show($"Login Berhasil! Selamat datang, {namaPetugas} ({level.ToUpper()})",
                                                    "Informasi", MessageBoxButtons.OK, MessageBoxIcon.Information);

                                    this.Hide();

                                    this.Close();
                                }
                                else
                                {
                                    TampilkanErrorLogin("Kata sandi yang Anda masukkan salah.");
                                }
                            }
                            else
                            {
                                TampilkanErrorLogin("Username tidak ditemukan di dalam sistem.");
                            }
                        }
                    }
                }
                catch (MySqlException ex)
                {
                    MessageBox.Show($"Koneksi ke database gagal!\nPastikan server MySQL aktif.\n\nDetail: {ex.Message}",
                                    "Error Koneksi", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
                catch (Exception ex)
                {
                    MessageBox.Show($"Terjadi kesalahan sistem: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
        }

        private void TampilkanErrorLogin(string pesan)
        {
            MessageBox.Show(pesan, "Gagal Otentikasi", MessageBoxButtons.OK, MessageBoxIcon.Error);
            textBox2.Clear();
            textBox2.Focus();
        }
        private void button2_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
       this.Hide();
            FormRegisterPetugas formRegister = new FormRegisterPetugas();
            formRegister.ShowDialog();
            this.Show();

        }
    }
}   