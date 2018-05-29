function Choix(form) {
i = form.Rubrique.selectedIndex;
if (i == 0) {
	 return;
	 }
switch (i) {
	case 1 : var txt = new Array (" l'Afrique du Sud Afrique du Sud "," l'Algérie Algérie"
    "," l'Angola Angola
    "," Bénin Bénin
    "," Botswana Botswana
    "," Burkina Faso Burkina Faso
    "," Burundi Burundi
    "," Cameroun Cameroun
    "," Cap-Vert Cap-Vert
    "," la République centrafricaine République centrafricaine
    ","s Comores Comores
    "," la République du Congo République du Congo
    "," la République démocratique du Congo République démocratique du Congo

	

    "," la Côte d'Ivoire Côte d'Ivoire
    "," Djibouti Djibouti
    "," l'Égypte Égypte
    "," l'Érythrée Érythrée
    "," l'Éthiopie Éthiopie
    "," Gabon Gabon
    "," la Gambie Gambie
    "," Ghana Ghana
    "," la Guinée Guinée
    "," la Guinée-Bissau Guinée-Bissau
    "," la Guinée équatoriale Guinée équatoriale
    "," Kenya Kenya
    "," Lesotho Lesotho
    "," Libéria Liberia

	

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
    "," Sao Tomé-et-Principe Sao Tomé-et-Principe

	

    "," Sénégal Sénégal
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
	case 2 : var txt = new Array ('Radioactivité','Information','Mesures'); break;
	case 3 : var txt = new Array ('Radioactivité','Information','Mesures'); break;
	case 4 : var txt = new Array ('Radioactivité','Information','Mesures'); break;
	case 5 : var txt = new Array ('Radioactivité','Information','Mesures'); break;
	}
form.Rubrique.selectedIndex = 0;
for (i=0;i<5;i++) {
	 form.Page.options[i+1].text=txt[i];
	 }
}