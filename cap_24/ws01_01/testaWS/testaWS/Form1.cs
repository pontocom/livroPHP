using System;
using System.Drawing;
using System.Collections;
using System.ComponentModel;
using System.Windows.Forms;
using System.Data;

namespace testaWS
{
	/// <summary>
	/// Summary description for Form1.
	/// </summary>
	public class Form1 : System.Windows.Forms.Form
	{
		private System.Windows.Forms.Label label1;
		private System.Windows.Forms.TextBox txtCidade;
		private System.Windows.Forms.Button btnPergunta;
		private System.Windows.Forms.TextBox txtMax;
		private System.Windows.Forms.TextBox txtMin;
		private System.Windows.Forms.Label label2;
		private System.Windows.Forms.Label label3;
		/// <summary>
		/// Required designer variable.
		/// </summary>
		private System.ComponentModel.Container components = null;

		public Form1()
		{
			//
			// Required for Windows Form Designer support
			//
			InitializeComponent();

			//
			// TODO: Add any constructor code after InitializeComponent call
			//
		}

		/// <summary>
		/// Clean up any resources being used.
		/// </summary>
		protected override void Dispose( bool disposing )
		{
			if( disposing )
			{
				if (components != null) 
				{
					components.Dispose();
				}
			}
			base.Dispose( disposing );
		}

		#region Windows Form Designer generated code
		/// <summary>
		/// Required method for Designer support - do not modify
		/// the contents of this method with the code editor.
		/// </summary>
		private void InitializeComponent()
		{
			this.label1 = new System.Windows.Forms.Label();
			this.txtCidade = new System.Windows.Forms.TextBox();
			this.btnPergunta = new System.Windows.Forms.Button();
			this.txtMax = new System.Windows.Forms.TextBox();
			this.txtMin = new System.Windows.Forms.TextBox();
			this.label2 = new System.Windows.Forms.Label();
			this.label3 = new System.Windows.Forms.Label();
			this.SuspendLayout();
			// 
			// label1
			// 
			this.label1.Location = new System.Drawing.Point(8, 24);
			this.label1.Name = "label1";
			this.label1.TabIndex = 0;
			this.label1.Text = "Cidade";
			// 
			// txtCidade
			// 
			this.txtCidade.Location = new System.Drawing.Point(112, 24);
			this.txtCidade.Name = "txtCidade";
			this.txtCidade.TabIndex = 1;
			this.txtCidade.Text = "";
			// 
			// btnPergunta
			// 
			this.btnPergunta.Location = new System.Drawing.Point(160, 64);
			this.btnPergunta.Name = "btnPergunta";
			this.btnPergunta.TabIndex = 2;
			this.btnPergunta.Text = "Pergunta";
			this.btnPergunta.Click += new System.EventHandler(this.btnPergunta_Click);
			// 
			// txtMax
			// 
			this.txtMax.Location = new System.Drawing.Point(136, 128);
			this.txtMax.Name = "txtMax";
			this.txtMax.TabIndex = 3;
			this.txtMax.Text = "";
			// 
			// txtMin
			// 
			this.txtMin.Location = new System.Drawing.Point(136, 160);
			this.txtMin.Name = "txtMin";
			this.txtMin.TabIndex = 4;
			this.txtMin.Text = "";
			// 
			// label2
			// 
			this.label2.Location = new System.Drawing.Point(16, 128);
			this.label2.Name = "label2";
			this.label2.TabIndex = 5;
			this.label2.Text = "Temp. Maxima";
			// 
			// label3
			// 
			this.label3.Location = new System.Drawing.Point(16, 160);
			this.label3.Name = "label3";
			this.label3.TabIndex = 6;
			this.label3.Text = "Temp. Minima";
			// 
			// Form1
			// 
			this.AutoScaleBaseSize = new System.Drawing.Size(5, 13);
			this.ClientSize = new System.Drawing.Size(292, 206);
			this.Controls.Add(this.label3);
			this.Controls.Add(this.label2);
			this.Controls.Add(this.txtMin);
			this.Controls.Add(this.txtMax);
			this.Controls.Add(this.btnPergunta);
			this.Controls.Add(this.txtCidade);
			this.Controls.Add(this.label1);
			this.Name = "Form1";
			this.Text = "WS Temperatura";
			this.ResumeLayout(false);

		}
		#endregion

		/// <summary>
		/// The main entry point for the application.
		/// </summary>
		[STAThread]
		static void Main() 
		{
			Application.Run(new Form1());
		}

		private void btnPergunta_Click(object sender, System.EventArgs e)
		{
			string max, min;

			meteoWS.meteo mws = new testaWS.meteoWS.meteo();
			string retv = mws.temperatura(txtCidade.Text, out max, out min);

			if(retv.CompareTo("ERRO")==0) 
			{
				System.Windows.Forms.MessageBox.Show("A cidade n�o existe!!!");
			} 
			else 
			{
				txtMax.Text = max;
				txtMin.Text = min;
			}

		}
	}
}
