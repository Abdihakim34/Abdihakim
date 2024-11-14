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
    public partial class Doctors : Form
    {
        public Doctors()
        {
            InitializeComponent();
        }

        private void pictureBox5_Click(object sender, EventArgs e)
        {

        }

        //home picture box using as a boton linking for another file

        private void boxDoc_Click(object sender, EventArgs e)
        {
            Doctors doc = new Doctors();
           doc.Show();
            this.Hide();
        }

        private void boxPatien_Click(object sender, EventArgs e)
        {
            Patients ptc = new Patients();
            ptc.Show();
            this.Hide();
        }

        private void boxDrug_Click(object sender, EventArgs e)
        {
            Drugs drg = new Drugs();
            drg.Show();
            this.Hide();
        }

        private void boxBill_Click(object sender, EventArgs e)
        {
            PayBills pay = new PayBills();
            pay.Show();
            this.Hide();
        }
    }
}
