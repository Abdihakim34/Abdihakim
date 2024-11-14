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
    public partial class Enterence : Form
    {
        public Enterence()
        {
            InitializeComponent();
        }

        //timer fucntion   midka loadingka inoo sameenaya

        //abuurrid
        int startpos=0;
        private void timer1_Tick(object sender, EventArgs e)
        {
            startpos +=1;
            progressOne.Value=startpos;
            Percentage.Text=startpos +"%";
            if(progressOne.Value==100){
                progressOne.Value=0;
                timer1.Stop();
                Login obj=new Login();
                obj.ShowDialog();
                this.Hide();
            }
        }

        //start timer noo bilow timeka percentageka iyo barka

        private void Enterence_Load(object sender, EventArgs e)
        {
            timer1.Start();
        }
    }
}
