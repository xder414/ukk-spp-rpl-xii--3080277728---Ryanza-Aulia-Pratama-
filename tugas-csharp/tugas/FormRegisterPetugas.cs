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
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace tugas
{
    public partial class FormRegisterPetugas : Form
    {
        public FormRegisterPetugas()
        {
            InitializeComponent();

            this.StartPosition = FormStartPosition.CenterScreen;

            if (comboBox1.Items.Count == 0)
            {
                comboBox1.Items.Add("petugas");
                comboBox1.Items.Add("admin");
                comboBox1.SelectedIndex = 0; 
            }

            if (textBox3 != null) textBox3.UseSystemPasswordChar = true;
            if (textBox4 != null) textBox4.UseSystemPasswordChar = true;
        }

        private void FormRegisterPetugas_Load(object sender, EventArgs e)
        {
            
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string username = textBox1.Text.Trim();
            string namaPetugas = textBox2.Text.Trim();
            string password = textBox3.Text.Trim();
            string konfirmasiPassword = textBox4.Text.Trim();
            string level = comboBox1.SelectedItem?.ToString();

         
            if (string.IsNullOrEmpty(username) || string.IsNullOrEmpty(namaPetugas) ||
                string.IsNullOrEmpty(password) || string.IsNullOrEmpty(konfirmasiPassword) || string.IsNullOrEmpty(level))
            {
                MessageBox.Show("Semua field wajib terisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                return;
            }

            if (password.Length < 6)
            {
                MessageBox.Show("Kata sandi minimal harus terdiri dari 6 karakter!", "Validasi Sandi", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                textBox3.Focus();
                return;
            }


            if (password != konfirmasiPassword)
            {
                MessageBox.Show("Konfirmasi kata sandi tidak cocok dengan kata sandi!", "Validasi Sandi", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                textBox4.Focus();
                return;
            }


            string connString = "server=localhost;port=3306;database=db_spp_sekolah_xii;uid=root;pwd=;";

            using (MySqlConnection conn = new MySqlConnection(connString))
            {
                try
                {
                    conn.Open();

                    string checkQuery = "SELECT COUNT(*) FROM petugas WHERE username = @username";
                    using (MySqlCommand checkCmd = new MySqlCommand(checkQuery, conn))
                    {
                        checkCmd.Parameters.AddWithValue("@username", username);
                        int count = Convert.ToInt32(checkCmd.ExecuteScalar());

                        if (count > 0)
                        {
                            MessageBox.Show("Username sudah terdaftar! Gunakan username lain.", "Duplikasi Data", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                            textBox1.Focus();
                            return;
                        }
                    }

                    string insertQuery = "INSERT INTO petugas (username, password, nama_petugas, level) VALUES (@username, @password, @nama_petugas, @level)";
                    using (MySqlCommand insertCmd = new MySqlCommand(insertQuery, conn))
                    {
                        insertCmd.Parameters.AddWithValue("@username", username);
                     
                        insertCmd.Parameters.AddWithValue("@nama_petugas", namaPetugas);
                        insertCmd.Parameters.AddWithValue("@level", level);

                        insertCmd.ExecuteNonQuery();

                        MessageBox.Show("Registrasi petugas baru berhasil disimpan!", "Sukses", MessageBoxButtons.OK, MessageBoxIcon.Information);
                        this.Close();
                    }
                }
                catch (MySqlException ex)
                {
                    MessageBox.Show($"Koneksi database gagal: {ex.Message}", "Error Koneksi", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
                catch (Exception ex)
                {
                    MessageBox.Show($"Terjadi kesalahan sistem: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
        }


        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
         
        }
    }
}