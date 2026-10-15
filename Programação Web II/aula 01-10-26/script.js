// Declara uma função asincrona
async function consultarClima() {
  const cidade = document.getElementById("cidade").value;

  // Verifica se o campo de cidade está vazio
  if (cidade === "") {
    // Exibe uma mensagem de alerta caso o campo esteja vazio
    alert("Digite uma cidade!");

    return; // Interrompe a execução da função
  }

  try {
    // Realiza a requisição para a API do OpenWeatherMap, utilizando a cidade informada pelo usuário
    // O comando wait é utilizado para aguardar a resposta da requisição antes de prosseguir com a execução do código
    const response = await fetch(
      `https://api.openweathermap.org/data/2.5/weather?q=${cidade}&appid=f79dc8210cb892e76ddf2427b68ed910&units=metric&lang=pt_br`,
    );

    // Converte a resposta da requisição em um objeto JSON, que pode ser manipulado pelo código
    // JSON é um formato de dados leve e fácil de ler, utilizado para troca de informações entre sistemas
    const dados = await response.json();

    // Atualiza o conteúdo dos elementos HTML com os dados obtidos da API
    // Exibe o nome da cidade retornado pela API
    document.getElementById("nomeCidade").innerHTML = `Cidade: ${dados.name}`;

    // Exibe a temperatura atual da cidade retornada pela API
    document.getElementById("temperatura").innerHTML =
      `Temperatura: ${dados.main.temp}°C`;

    // Exibe a descrição do clima atual da cidade retornada pela API (Ensolarado, Nublado, Chuvoso, etc.)
    document.getElementById("clima").innerHTML =
      `Clima: ${dados.weather[0].description}`;

    // Exibe a umidade do ar atual da cidade retornada pela API
    document.getElementById("umidade").innerHTML =
      `Umidade: ${dados.main.humidity}%`;
  } catch (erro) {
    console.error("Erro ao consultar o clima:", error);
  }
}
