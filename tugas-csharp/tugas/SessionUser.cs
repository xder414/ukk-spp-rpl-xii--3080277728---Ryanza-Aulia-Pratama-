using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace tugas
{
    internal static class SessionUser
    {
        public static int IdPetugas { get; private set; }
        public static string Username { get; private set; }
        public static string NamaPetugas { get; private set; }
        public static string Level { get; private set; }
        public static bool IsLoggedIn { get; private set; } = false;
        public static void SetSession(int id, string username, string nama, string level)
        {
            IdPetugas = id;
            Username = username;
            NamaPetugas = nama;
            Level = level;
            IsLoggedIn = true;
        }
        public static void ClearSession()
        {
            IdPetugas = 0;
            Username = string.Empty;
            NamaPetugas = string.Empty;
            Level = string.Empty;
            IsLoggedIn = false;
        }
        public static bool IsAdmin()
        {
            return !string.IsNullOrEmpty(Level) && Level.ToLower() == "admin";
        }
    }
}