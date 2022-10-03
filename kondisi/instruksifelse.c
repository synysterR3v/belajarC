/* File: IF_ELSE_IF.c */
/* Penulis : Bu Dengklek, email inge@bebras.or.id */
/* Deskripsi : */                                              
/* contoh pemakaian IF tiga kasus */
/* Membaca sebuah nilai, */
/* menuliskan 'Nilai a positif , nilai a', jika a >0 */
/*            'Nilai Nol , nilai a', jika a = 0  */
/*            'Nilai a negatif , nilai a', jika a <0  */
#include<stdio.h>
int main ()
{
/* Kamus */
  int a;
  /* Program */
  printf ("Contoh IF tiga kasus \n");
  printf ("Ketikkan suatu nilai integer :");
  scanf ("%d", &a);
  if (a > 0)
    {
      printf ("Nilai a positif %d \n", a);
    }
  else if (a == 0)
    {
      printf ("Nilai Nol %d \n", a);
    }
  else /* a < 0 */
    {
      printf ("Nilai a negatif %d \n", a);
    }
  return 0;
}

// /* File: IF_ELSE_IF1.c */
// /* Penulis : Bu Dengklek, email inge@bebras.or.id */
// /* Deskripsi : */
// /* contoh pemakaian IF tiga kasus */
// /* Membaca sebuah nilai, */
// /* menuliskan 'Nilai a positif , nilai a', jika a >0 */
// /*            'Nilai Nol , nilai a', jika a = 0  */
// /*            'Nilai a negatif , nilai a', jika a <0  */
// #include<stdio.h>
// int main ()
// {
// /* Kamus */
//   int a;
//   /* Program */
//   printf ("Contoh IF tiga kasus dengan tiga kalimat IF \n");
//   printf ("Ketikkan suatu nilai integer :");
//   scanf ("%d", &a);
//   if (a > 0)
//     {
//       printf ("Nilai a positif %d \n", a);
//     }
//   if (a == 0)
//     {
//       printf ("Nilai Nol %d \n", a);
//     }
//   if (a < 0)
//     {
//       printf ("Nilai a negatif %d \n", a);
//     }
//   return 0;
// }