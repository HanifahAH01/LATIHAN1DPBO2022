//============================================================//
//           Saya Hanifah Al Humaira mengerjakan              //
//         	   Latihan 1 dalam mata kuliah DPBO	    	      //
//	untuk keberkahanNya maka saya tidak melakukan kecurangan  //
//    	 seperti yang telah dispesifikasikan. Aamiin          //
//============================================================//


// Java code to illustrate String
import java.io.*;
import java.lang.*;
import java.util.*;


class Human{
  String name;
  int Tahun;
}


class SepakBola {
  String NamaTim; //atribut untuk nama tim sepak bola
  String NegaraAsal; //atribut untuk asal segara tim sepak bola
  int Didirikan; //atriibut untuk tahun didirikan tim sepak bola
  int BanyakPemain; //atribut untuk banyak pemain tim sepak bola


  SepakBola(){

  }

  SepakBola(String NamaTim,String NegaraAsal,int Didirikan,int BanyakPemain){
    this.NamaTim=NamaTim;
    this.NegaraAsal=NegaraAsal;
    this.Didirikan=Didirikan;
    this.BanyakPemain=BanyakPemain;  
  };

  public void print(){
    System.out.println("###======================Sepak Bola===========================###"); //tampilan keluaran
    System.out.println("Nama tim : " + NamaTim); //tampilan keluaran
    System.out.println("Nama Negara asal tim : "  + NegaraAsal); //tampilan keluaran
    System.out.println("Tahun didirikan : "+ Didirikan); //tampilan keluaran
    System.out.println("Jumlah pemain : "+ BanyakPemain); //tampilan keluaran
    System.out.println("###===========================================================###"); //tampilan keluaran
    
  }
}


class Main {
  public static void main(String[] args) {
    Scanner sc= new Scanner(System.in); 
    System.out.println("Masukan jumlah tim : "); //tampilan masukan
    int n=sc.nextInt();

    SepakBola[]arr=new SepakBola[n];

    int i=0;
    for(i=0;i<n;i++){
      Scanner SC= new Scanner(System.in); 
      System.out.println("Nama tim : "); //tampilan masukan
      String NamaTim=SC.nextLine();
      System.out.println("Negara Asal : "); //tampilan masukan
      String NegaraAsal=SC.nextLine();
      System.out.println("Tahun didirikan : "); //tampilan masukan
      int Didirikan=SC.nextInt(); 
      System.out.println("Banyak pemain : "); //tampilan masukan
      int BanyakPemain=SC.nextInt();

      arr[i] = new SepakBola(NamaTim,NegaraAsal,Didirikan,BanyakPemain);
    }  

    for(int k=0;k<n;k++){
      arr[k].print();
    }
  }
}
