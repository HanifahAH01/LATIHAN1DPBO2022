#include <bits/stdc++.h>
using namespace std;

//============================================================//
//           Saya Hanifah Al Humaira mengerjakan              //
//         	   Latihan 1 dalam mata kuliah DPBO	    	      //
//	untuk keberkahanNya maka saya tidak melakukan kecurangan  //
//    	 seperti yang telah dispesifikasikan. Aamiin          //
//============================================================//

class Employee{
  public:
  string Nama; 
};

class Player:public Employee{
  public:
  int playerNumber;

  Player(){};

};

class SepakBola{
  public:
  string NamaTim; //atribut untuk nama tim sepak bola
  string NegaraAsal; //atribut untuk negara asal tim sepak bola
  int Didirikan; //atribut untuk tahun didirikannya tim sepak bola
  Player players[100];
  int BanyakPemain; //atribut untuk banyak pemain tim sepak bola
  
  void setNamaTim(string Nama){
    NamaTim=Nama;
  }
  string getNamaTim(){
    return NamaTim;
  }

  void setNegara(string Negara){
    NegaraAsal=Negara;
  }

  string getNegara(){
    return NegaraAsal;
  }

  void setDidirikan(int Didirikan){
    Didirikan=Didirikan;
  }

  int getDidirikan(){
    return Didirikan;
  }

  SepakBola(string NamaTim,string NegaraAsal,int Didirikan,int BanyakPemain){
    this->NamaTim=NamaTim;
    this->NegaraAsal=NegaraAsal;
    this->Didirikan=Didirikan;
    this->BanyakPemain=BanyakPemain;  
  };

  SepakBola(){

  };

   void printClass(){
     printf("###======================Sepak Bola===========================###\n"); //tampilan keluaran
     cout<<"Nama tim : " + NamaTim; //tampilan keluaran
     printf("\n");
     cout<<"Nama Negara asal tim : " + NegaraAsal; //tampilan keluaran
     printf("\n");
     cout<<"Tahun didirikan : " << Didirikan; //tampilan keluaran
     printf("\n");
     cout<<"Jumlah pemain : " << BanyakPemain; //tampilan keluaran
     printf("\n");
     printf("###===========================================================###\n"); //tampilan keluaran
          
   }  
};