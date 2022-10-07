#include<stdio.h>

int main()
{
    int a, b, hasil, menu;
    float c, d, hasilBagi;

    printf("==================++===============\n\n");
    printf("Program Kalkulator sederhana Sekali\n\n");
    printf("==================++===============\n\n\n");
    printf("\t Menu :\n\n");
    printf("\t1. Penjumlahan\n");
    printf("\t2. Pengurangan\n");
    printf("\t3. Perkalian\n");
    printf("\t4. Pembagian\n");

    printf("Pilih Menu : \n");
    scanf("%d", &menu);
    printf("-----------------------------------\n");
    switch (menu)
    {
    case 1:/* constant-expression */
        /* code */
        printf("Masukan Bilangan 1 : ");
        scanf("%d", &a);
        printf("Masukan Bilangan 2 : ");
        scanf("%d", &b);
        hasil = a + b;
        printf("Hasil : %d\n", hasil);
        // break;
    
    default:
        break;
    }
}