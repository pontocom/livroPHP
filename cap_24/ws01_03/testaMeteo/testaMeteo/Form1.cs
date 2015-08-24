using System;
using System.Drawing;
using System.Collections;
using System.ComponentModel;
using System.Windows.Forms;
using System.Data;

namespace testaMeteo
{
	/// <summary>
	/// Summary description for Form1.
	/// </summary>
	public class Form1 : System.Windows.Forms.Form
	{
		private System.Windows.Forms.Label label1;
		private System.Windows.Forms.TextBox txtCidade;
		private System.Windows.Forms.Button btnProcura;
		private System.Windows.Forms.TextBox txtMin;
		private System.Windows.Forms.TextBox txtMax;
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
			this.btnProcura = new System.Windows.Forms.Button();
			this.txtMin = new System.Windows.Forms.TextBox();
			this.txtMax = new System.Windows.Forms.TextBox();
			this.SuspendLayout();
			// 
			// label1
			// 
			this.label1.Location = new System.Drawing.Point(8, 16);
			this.label1.Name = "label1";
			this.label1.TabIndex = 0;
			this.label1.Text = "Cidade:";
			this.label1.Click += new System.EventHandler(this.label1_Click);
			// 
			// txtCidade
			// 
			this.txtCidade.Location = new System.Drawing.Point(112, 16);
			this.txtCidade.Name = "txtCidade";
			this.txtCidade.Size = new System.Drawing.Size(152, 20);
			this.txtCidade.TabIndex = 1;
			this.txtCidade.Text = "";
			// 
			// btnProcura
			// 
			this.btnProcura.Location = new System.Drawing.Point(120, 56);
			this.btnProcura.Name = "btnProcura";
			this.btnProcura.TabIndex = 2;
			this.btnProcura.Text = "Procura";
			this.btnProcura.Click += new System.EventHandler(this.btnProcura_Click);
			// 
			// txtMin
			// 
			this.txtMin.Location = new System.Drawing.Point(16, 120);
			this.txtMin.Name = "txtMin";
			this.txtMin.TabIndex = 3;
			this.txtMin.Text = "";
			// 
			// txtMax
			// 
			this.txtMax.Location = new System.Drawing.Point(160, 120);
			this.txtMax.Name = "txtMax";
			this.txtMax.TabIndex = 4;
			this.txtMax.Text = "";
			// 
			// Form1
			// 
			this.AutoScaleBaseSize = new System.Drawing.Size(5, 13);
			this.ClientSize = new System.Drawing.Size(292, 174);
			this.Controls.Add(this.txtMax);
			this.Controls.Add(this.txtMin);
			this.Controls.Add(this.btnProcura);
			this.Controls.Add(this.txtCidade);
			this.Controls.Add(this.label1);
			this.Name = "Form1";
			this.Text = "Serviço de Informação Meteo";
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

		private void label1_Click(object sender, System.EventArgs e)
		{
		
		}

		private void btnProcura_Click(object sender, System.EventArgs e)
		{
			string max, min;

			meteoWS.meteo ws = new testaMeteo.meteoWS.meteo();
			string ret = ws.temperatura(txtCidade.Text, out max, out min);

			if(ret.CompareTo("ERRO")==0) 
			{
				MessageBox.Show("Previsao para a cidade inexistente!!!");
			}
			else 
			{
				txtMin.Text = min;
				txtMax.Text = max;
			}
		}
	}
}
