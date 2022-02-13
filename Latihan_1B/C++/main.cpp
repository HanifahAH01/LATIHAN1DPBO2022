#include "daftartim.cpp"

//============================================================//
//           Saya Hanifah Al Humaira mengerjakan              //
//         	   Latihan 1 dalam mata kuliah DPBO	    	      //
//	untuk keberkahanNya maka saya tidak melakukan kecurangan  //
//    	 seperti yang telah dispesifikasikan. Aamiin          //
//============================================================//

int main() {

  string NamaTim; //atribut untuk nama tim sepak bola
  string NegaraAsal; //atribut untuk asal segara tim sepak bola
  int Didirikan; //atru=ibut untuk tahun didirikan tim sepak bola

  int n; //inisilisasi
  cout<<"Masukan jumlah tim : ";
  cin>>n;

  SepakBola arr[n];
  
	for(int i=0;i<n;i++){
		
		cout << "Nama tim : "; //tampilan masukan
		cin >> NamaTim;

		cout << "Negara Asal : "; //tampilan masukan
		cin >> NegaraAsal;

		cout << "Tahun Didirikan : "; //tampilan masukan
		cin >> Didirikan;

		int m;
		cout<< "Banyak Pemain : "; //tampilan masukan
		cin >>m;
		arr[i]=SepakBola(NamaTim, NegaraAsal, Didirikan,m);
		printf ("###===========================================================###\n");
	}

  for(int i=0;i<n;i++){
		arr[i].printClass();
	}
}

  