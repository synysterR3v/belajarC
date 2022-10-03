// int main() 
// {
//   int nilai = 89;
//   if (nilai < 75)
//   {
//     printf ("Ayo belajar lebih giat");
//   }
//   else if (nilai == 75)
//   {
//     printf ("Tingkatkan prestasimu");
//   }
//   else
//   {
//     printf ("Pertahankan nilaimu");
//   }
//   return 0;
// }


// #include<stdio.h>
// int main () 
// {
//   int i;
//   int Tab[10]= { 8, 4 , 2 , 99, 3, 100, 56, 9, 97, 400 };
//   int min;
//   /* Algoritma */
//   min = Tab[0];
//   for (i=1;i< 10; i++)  {
//      if (Tab[i]<min) {
//         min=Tab[i];
//      }
//   } 
//   printf ("Nilai Min= %d", min);
//   return 0;
// }

#include <stdio.h>
int main()
{
  int i;
  int Tab[10] = {1, 50, 6, 200, 3, 100, 30, 8, 99, 100};
  int max;
  max = Tab[0];
  for (i = 1; i<10; i++) {
    if (Tab[i]>max) {
      max=Tab[i];
    }
  }
  printf ("Nilai Max= %d", max);
  return 0;
}