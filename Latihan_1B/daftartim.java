// Java code to illustrate String
import java.io.*;
import java.lang.*;
import java.util.*;


class Human{
  String name;
  int Tahun;
}


class SepakBola {
  String NamaTim;
  String NegaraAsal;
  int Didirikan;
  int BanyakPemain;


  SepakBola(){

  }

  SepakBola(String NamaTim,String NegaraAsal,int Didirikan,int BanyakPemain){
    this.NamaTim=NamaTim;
    this.NegaraAsal=NegaraAsal;
    this.Didirikan=Didirikan;
    this.BanyakPemain=BanyakPemain;  
  };

  public void print(){
    System.out.println("###=========================================###");
    System.out.println("Nama tim :" + NamaTim);
    System.out.println("Nama Negara asal tim :"  + NegaraAsal);
    System.out.println("Tahun didirikan :"+ Didirikan);
    System.out.println("Jumlah pemain :"+ BanyakPemain);
    System.out.println("###=========================================###");
    
  }
}


class Main {
  public static void main(String[] args) {
    Scanner sc= new Scanner(System.in); //System.in is a standard input stream
    System.out.println("Masukan jumlah tim:");
    int n=sc.nextInt();

    SepakBola[]arr=new SepakBola[n];

    int i=0;
    for(i=0;i<n;i++){
      Scanner SC= new Scanner(System.in); //System.in is a standard input stream
      System.out.println("Nama tim:");
      String NamaTim=SC.nextLine();
      System.out.println("Negara Asal:");
      String NegaraAsal=SC.nextLine();
      System.out.println("Tahun didirikan:");
      int Didirikan=SC.nextInt(); 
      System.out.println("Banyak pemain:");
      int BanyakPemain=SC.nextInt();

      arr[i] = new SepakBola(NamaTim,NegaraAsal,Didirikan,BanyakPemain);
    }  

    for(int k=0;k<n;k++){
      arr[k].print();
    }
  }
}