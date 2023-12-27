/*
1. De férias nos Emirados Árabes, a conselheira Trace recebe uma caixa de seu
chocolate Cretariano favorito, juntamente com uma mensagem criptografada do
remetente revelando sua identidade. Usando o exemplo de criptografia citado por
Marçula & Benini Filho, decodifique a mensagem MPHKCESEVGUGSRKVVECB, cuja
chave é: 00 07 05 03 02. Decodifique para saber o nome do remetente.
*/
int[] chave = new int[]{};
string opcao;
do
{
    Console.ForegroundColor = ConsoleColor.Blue;
    Console.WriteLine(@$"
MENU
----------------------
[1] Criptografar
[2] Descriptografar
[3] Ver chave anterior
[0] Encerrar programa
----------------------");
    opcao = Console.ReadLine();
    Console.ResetColor();

    string mensagem = string.Empty;
    switch (opcao)
    {
        case "1":
            Console.WriteLine($"\nDigite a frase/palavra que deseja criptografar \nPor favor não digite acentos ou caractéres especiais:");
            mensagem = Console.ReadLine().ToUpper();
            Processar(mensagem, opcao, chave);
            break;
        case "2":
            Console.WriteLine($"\nDigite o código que deseja descriptografar:");
            mensagem = Console.ReadLine().ToUpper();
            Processar(mensagem, opcao, chave);
            break;
        case "3":
            Console.WriteLine($"");

            for (int i = 0; i < 5; i++)
            {
                Console.Write($"{chave[i]}");

            }
            break;
        case "0":
            Console.WriteLine($"\nSaindo do programa...");
            Thread.Sleep(1000);
            Console.WriteLine($"\nPrograma encerrado");
            break;
        default:
            Console.WriteLine($"\nOpção inválida!");
            break;
    }
} while (opcao != "0");

static void Processar(string mensagem, string opcao, int[] chave)
{
    int tamanho = mensagem.Length;
    System.Console.WriteLine(tamanho);

    char[] array = mensagem.ToCharArray(0, tamanho);
    int[] array2 = new int[tamanho];

    for (var i = 0; i < tamanho; i++)
    {
        string numero = Transformar(array[i].ToString());
        array2[i] = int.Parse(numero);
    }
    string[] array3 = new string[tamanho];

    for (var i = 0; i < tamanho; i++)
    {
        array3[i] = array2[i].ToString();
    }

    int[] array4 = new int[tamanho];

    Console.WriteLine(@$"
Agora digite os números que formarão a chave que será usada no processo:
Os números devem conter 2 dígitos:");

    string[] arrayCodigo1 = new string[5];

    for (int i = 0; i < 5; i++)
    {
        do
        {
            Console.WriteLine($"\nDigite a {i + 1}º ");
            arrayCodigo1[i] = Console.ReadLine();
        } while (arrayCodigo1[i].Length != 2);
    }

    int[] arrayCodigo = Array.ConvertAll(arrayCodigo1, s => int.Parse(s));

    Console.WriteLine(string.Empty);

    for (int i = 0; i < tamanho; i++)
    {
        for (int ic = 0; ic < 5; ic++)
        {
            switch (opcao)
            {
                case "1":
                    array4[i] = int.Parse(array3[i]) + arrayCodigo[ic];

                    while (array4[i] > 26)
                    {
                        array4[i] -= 27;
                    }
                    break;
                case "2":
                    array4[i] = int.Parse(array3[i]) - arrayCodigo[ic];

                    while (array4[i] < 1)
                    {
                        array4[i] += 27;
                    }

                    break;
                default:
                    break;
            }
            if (i < tamanho - 1)
            {
                i++;
            }
            else
            {
                ic = 4;
                i++;
            }
        }
        if (i < tamanho)
        {
            i--;
        };
    }

    Console.WriteLine(string.Empty);

    string[] arrayFinal = new string[tamanho];

    switch (opcao)
    {
        case "1":
            Console.WriteLine($"\nCriptografia realizada! Código abaixo:");
            break;
        case "2":
            Console.WriteLine($"\nDescriptografia realizada! Resposta abaixo abaixo:");
            break;
        default:
            break;
    }

    for (var i = 0; i < tamanho; i++)
    {
        arrayFinal[i] = Transformar(array4[i].ToString());
        Console.Write($"{arrayFinal[i]}");
    }

    Console.WriteLine(string.Empty);

    chave = arrayCodigo;
}


static string Transformar(string letra)
{
    switch (letra)
    {
        case "A":
            return "1";
        case "B":
            return "2";
        case "C":
            return "3";
        case "D":
            return "4";
        case "E":
            return "5";
        case "F":
            return "6";
        case "G":
            return "7";
        case "H":
            return "8";
        case "I":
            return "9";
        case "J":
            return "10";
        case "K":
            return "11";
        case "L":
            return "12";
        case "M":
            return "13";
        case "N":
            return "14";
        case "O":
            return "15";
        case "P":
            return "16";
        case "Q":
            return "17";
        case "R":
            return "18";
        case "S":
            return "19";
        case "T":
            return "20";
        case "U":
            return "21";
        case "V":
            return "22";
        case "W":
            return "23";
        case "X":
            return "24";
        case "Y":
            return "25";
        case "Z":
            return "26";
        case " ":
            return "0";
        case "1":
            return "A";
        case "2":
            return "B";
        case "3":
            return "C";
        case "4":
            return "D";
        case "5":
            return "E";
        case "6":
            return "F";
        case "7":
            return "G";
        case "8":
            return "H";
        case "9":
            return "I";
        case "10":
            return "J";
        case "11":
            return "K";
        case "12":
            return "L";
        case "13":
            return "M";
        case "14":
            return "N";
        case "15":
            return "O";
        case "16":
            return "P";
        case "17":
            return "Q";
        case "18":
            return "R";
        case "19":
            return "S";
        case "20":
            return "T";
        case "21":
            return "U";
        case "22":
            return "V";
        case "23":
            return "W";
        case "24":
            return "X";
        case "25":
            return "Y";
        case "26":
            return "Z";
        case "27":
            return " ";
        case "0":
            return " ";
        default:
            break;
    }
    return string.Empty;
}

