const form = document.getElementById('form')
const nome = document.getElementById('nomee')
const documento = document.getElementById('documentoo')
const data = document.getElementById('dataa')
const sexo = document.getElementById('sexoo')
const situacao = document.getElementById('situacaoo')
const logradouro = document.getElementById('logradouroo')
const numero = document.getElementById('numeroo')
const bairro = document.getElementById('bairroo')
const cidade = document.getElementById('cidadee')
const estado = document.getElementById('estadoo')
const email = document.getElementById('emaill')
const telefone = document.getElementById('telefonee')

//const checkInputs = () => {}

// form.addEventListener('submit', e => {
//   e.processar.php()

//   checkInputs()
// })

function checkInputs() {
  const nomeValue = nome.value
  const documentoValue = documento.value
  const dataValue = data.value
  const sexoValue = sexo.value
  const situacaoValue = situacao.value
  const logradouroValue = logradouro.value
  const numeroValue = numero.value
  const bairroValue = bairro.value
  const cidadeValue = cidade.value
  const estadoValue = estado.value
  const emailValue = email.value
  const telefoneValue = telefone.value

  if (nomeValue == '') {
    setErrorFor(nome, 'O nome de usuário é obrgatório!')
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement
  const small = formControl.querySelector('small')

  small.innerText = message

  formControl.className = 'form-control error'
}

function setSuccessFor(input) {
  const formControl = input.parentElement

  formControl.className = 'form-control success'
}
