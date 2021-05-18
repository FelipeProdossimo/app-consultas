//data no formato "dd/mm/aaaa"
$data = $_POST['data'];

//atribuindo o total de caracteres à uma variavel
$total = strlen($data);

//percorrendo o que a pessoa digitou
for($cont = 0; $cont < $total; $cont++)
{
    //a unica coisa que nos interessa sao os numeros, portanto, vamos descartar tudo que nao seja numero
    if(is_numeric($data[$cont]))
    {
        //concatenando os valores à uma variavel auxiliar
        $temp .= $data[$cont];
    }
}
//recebendo novamente a data, somente com numeros
$data = $temp;

//a data deve conter apenas numeros, portanto, o tamanho dele deve ser 8 (dd + mm + aaaa)
if(strlen($data) != 8)
{
    echo "digite uma data valida";
    exit();
}
//se tiver 8 digitos, devemos verificar se ela eh valida
//recebendo o dia informado
$dia = $data[0].$data[1];
//recebendo o mes informado
$mes = $data[2].$data[3];
//recebendo o ano informado
$ano = $data[4].$data[5].$data[6].$data[7];
//verificando se a data existe
if(!checkdate($mes, $dia, $ano))
{
    echo "Data invalida, informe uma data valida";
    exit();
}
//se a data for valida, devemos inseri-la no banco no formato "dd/mm/aaaa", por isso vamos "converte-la" :D
$nova_data = $dia."/".$mes."/".$ano;

//caso queira ver o resultado, basta descomentar a linha abaixo
//echo $nova_data;