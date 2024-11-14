using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Hospital_ManagementS_2023
{
    public partial class Login : Form
    {
        public Login()
        {
            InitializeComponent();
        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        //button loging validation  xaqiijinta button login ka 


        private void btnLog_Click(object sender, EventArgs e)
        {
            if (textAdmin.Text == "" && textPass.Text == "")
            {
                MessageBox.Show("invalid Information");
            }
            //addming conditions user and password checker
            else if (textAdmin.Text == "Admin" && textPass.Text == "admin123")
            {
                //loging another form application checker
                Home obj = new Home();
                obj.ShowDialog();
                this.Hide();

            }
            else
            {
                MessageBox.Show("Username or Password is incorrect please try again!");
            }
        }

        //button reset validations

        private void btnReset_Click(object sender, EventArgs e)
        {
            textAdmin.Text = "";
            textPass.Text = "";
        }

        private void checkBoxshow_CheckedChanged(object sender, EventArgs e)
        {
            textPass.PasswordChar = checkBoxshow.Checked ? '\0' : '*';
        }
    }
}
