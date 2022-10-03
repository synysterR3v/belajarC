/* File: forever.c */
/* Penulis : Bu Dengklek, email inge@bebras.or.id */
/* Deskripsi : */                                               
/* Loop terus menerus, akan sering dipakai untuk program menunggu event */
#include<stdio.h>
int main ()
{/* Kamus : */
 
/* Program */
  printf("Program akan looping, akhiri dengan Ctrl-c "); 
  while (1) /* atau for (;;) */
    {     printf ("Tunggu ^c....\n");
           /* program akan terus menerus dijalankan, sampai diinterupsi*/
           /* cara interupsi adalah dengan menekan tombol [Ctrl] dan tombol "c" bersamaan*/
    }
  return 0;
}


// #include <stdio.h>
 
// int main(void)
// {
//    int a = 0;
//    while (a < 10) {
//       printf("%d\n", a);
//       if (a = 5)
//          printf("a equals 5!\n");
//       a++;
//    }
//    return 0;
// }