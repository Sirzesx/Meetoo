function Choix(form) {
i = form.Rubrique.selectedIndex;
if (i == 0) {
	 return;
	 }
switch (i) {
	case 1 : var txt = new Array (" l'Afrique du Sud Afrique du Sud "," l'Alg�rie Alg�rie"
    "," l'Angola Angola
    "," B�nin B�nin
    "," Botswana Botswana
    "," Burkina Faso Burkina Faso
    "," Burundi Burundi
    "," Cameroun Cameroun
    "," Cap-Vert Cap-Vert
    "," la R�publique centrafricaine R�publique centrafricaine
    ","s Comores Comores
    "," la R�publique du Congo R�publique du Congo
    "," la R�publique d�mocratique du Congo R�publique d�mocratique du Congo

	

    "," la C�te d'Ivoire C�te d'Ivoire
    "," Djibouti Djibouti
    "," l'�gypte �gypte
    "," l'�rythr�e �rythr�e
    "," l'�thiopie �thiopie
    "," Gabon Gabon
    "," la Gambie Gambie
    "," Ghana Ghana
    "," la Guin�e Guin�e
    "," la Guin�e-Bissau Guin�e-Bissau
    "," la Guin�e �quatoriale Guin�e �quatoriale
    "," Kenya Kenya
    "," Lesotho Lesotho
    "," Lib�ria Liberia

	

    "," la Libye Libye
    "," Madagascar Madagascar
    "," Malawi Malawi
    "," Mali Mali
    "," Maroc Maroc
    "," Maurice Maurice
    "," la Mauritanie Mauritanie
    "," Mozambique Mozambique
    "," la Namibie Namibie
    "," Niger Niger
    "," Nigeria Nigeria
    "," l'Ouganda Ouganda
    "," Rwanda Rwanda
    "," Sao Tom�-et-Principe Sao Tom�-et-Principe

	

    "," S�n�gal S�n�gal
    ","s Seychelles Seychelles
    "," Sierra Leone Sierra Leone
    "," la Somalie Somalie
    "," Soudan Soudan
    "," Soudan du Sud Soudan du Sud
    "," Swaziland Swaziland
    "," la Tanzanie Tanzanie
    "," Tchad Tchad
    "," Togo Togo
    "," la Tunisie Tunisie
    "," la Zambie Zambie
    "," Zimbabwe Zimbabwe
); break;
	case 2 : var txt = new Array ('Radioactivit�','Information','Mesures'); break;
	case 3 : var txt = new Array ('Radioactivit�','Information','Mesures'); break;
	case 4 : var txt = new Array ('Radioactivit�','Information','Mesures'); break;
	case 5 : var txt = new Array ('Radioactivit�','Information','Mesures'); break;
	}
form.Rubrique.selectedIndex = 0;
for (i=0;i<5;i++) {
	 form.Page.options[i+1].text=txt[i];
	 }
}