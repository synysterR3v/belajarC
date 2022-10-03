/* File: tabel1.c */
/* Penulis : Bu Dengklek, email inge@bebras.or.id */
/* Deskripsi : */                                             
/* Mendefinisikan array dan mengisi nilainya dari input yang dibaca */
#include<stdio.h>
int main ()
{
 /* Kamus */
  int Tab [5];
  int i; 
  /* baca isi Tab */
  for (i=0; i<5; i++) {
     scanf ("%d", &Tab[i]);
  }  
 
  /* menuliskan isi Tab berderet ke kanan*/
  for (i=0; i<5; i++) {
     printf ("Tab[%d]= %d ;", i,  Tab[i]);
  }
  printf ("\n");
  
  return 0;
}
