using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace tugas
    
{

    public static class Koneksi
    {
        private static string connectionString = "server=localhost;port=3306;database=db_spp_sekolah_xii;uid=root;pwd=;";

        public static MySqlConnection GetConnection()
        {
            try
            {
                MySqlConnection conn = new MySqlConnection(connectionString);
                return conn;
            }
            catch (MySqlException ex)
            {
                MessageBox.Show("Gagal terhubung ke database server:\n" + ex.Message, "Error Koneksi", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return null;
            }
        }
    }
}

