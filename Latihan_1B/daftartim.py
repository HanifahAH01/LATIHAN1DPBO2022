#============================================================#
#           Saya Hanifah Al Humaira mengerjakan              #
#         	   Latihan 1 dalam mata kuliah DPBO	    	     #
#  untuk keberkahanNya maka saya tidak melakukan kecurangan  #
#    	 seperti yang telah dispesifikasikan. Aamiin         #
#============================================================#
class Tim(object):
  Nama=''
  Tahun='0'

class Player(Tim):
  playerNumber=''
  role=''

n=100

class SepakBola():
  NamaTim=''
  NegaraAsal=''
  TahunDidirikan=''
  players = [Player() for i in range(n)]
  BanyakPemain=0
  def __init__(self,NamaTim='',NegaraAsal='',TahunDidirikan='',BanyakPemain=''):
    self.NamaTim=NamaTim
    self.NegaraAsal=NegaraAsal
    self.TahunDidirikan=TahunDidirikan
    self.BanyakPemain=BanyakPemain
  def print(self):
    print("###======================Sepak Bola===========================###") #tampilan keluaran
    print("Nama tim :"+self.NamaTim)  #tampilan keluaran
    print("Negara asal :"+self.NegaraAsal)  #tampilan keluaran
    print("Tahun didirikan :"+self.TahunDidirikan)  #tampilan keluaran
    print("Banyak pemain :"+str(self.BanyakPemain))  #tampilan keluaran
    print("###===========================================================###")  #tampilan keluaran
      
 #tampilan masukan
m=int(input("Banyak tim : "))
arrOfClass=[SepakBola() for i in range(m)]
i=0
j=0
for i in range(m):
  namaTIm=input("Nama tim : ")
  namaNegara=input("Negara Asal : ")
  didirikan=input("Tahun didirikan : ")
  jumlahPemain=int(input("Banyak pemain : "))
  arrOfClass[i]=SepakBola(namaTIm,namaNegara,didirikan,jumlahPemain)
  for j in range(jumlahPemain):
    
    i=0
    for i in range(m):
        arrOfClass[i].print()

    


  