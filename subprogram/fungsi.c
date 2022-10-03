/* File: fadd.c */
/* Penulis : Bu Dengklek, email inge@bebras.or.id */
/* Deskripsi : */
/* Fungsi yang menjumlahkan a+b */
#include<stdio.h>
 
int add (int a, int b) {
  /* fungsi bernama add yang menerima dua integer yaitu a dan b */
  /* dan mengirimkan hasil penjumlahan a+b */
  return(a+b);
}
 
int inkremen (int a) {
  /* Mengirimkan nilai a yang sudah ditambah dengan 1; perhatikan bahwa nilai a TIDAK DIUBAH*/
  return (a+1);
}
/************************/
int main() {
  int x=10;
  int y=25;
  /* pemakaian/pemanggilan fungsi add */
  printf("Hasil penjumlahan x+y = %d", add(x,y)); 
  printf("Hasil penjumlahan 3+2 = %d", add(3,2));
  
  /* pemakaian/pemanggilan fungsi inkremen */
  printf("nilai x   : %d\n", x);
  printf("nilai x  setelah ditambah 1 : %d\n", inkremen(x));
  printf("nilai 5  setelah ditambah 1 : %d\n", inkremen(5));
 
  return 0;
}

// /* File: random.c */
// /* Penulis : Bu Dengklek, email inge@bebras.or.id */
// /* Deskripsi : */
// /* Pemakaian standard library untuk membangkitkan bilangan random */
// #include<stdio.h>
// #include <stdlib.h> 
// /************************/
// int main() {
//    const int MIN=1; 
//    const int MAX=100; 
//    /* Program akan membangkitkan 5 bilangan random antar MIN sampai MAX  */ 
//     for(int i = 0; i<5; i++) 
//         printf(" %d ", rand()%MAX + MIN); 
//   return 0;
// }