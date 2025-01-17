let horas_semanais_trabalhadas = 40;
let valor_hora_normal = 35.00;
let valor_hora_extra = 50.00;
let horas_normais_semana = 44;
let salario;

if (horas_semanais_trabalhadas > horas_normais_semana) {
    salario = (horas_normais_semana * valor_hora_normal) +
              ((horas_semanais_trabalhadas - horas_normais_semana) * valor_hora_extra);
} else {
    salario = horas_semanais_trabalhadas * valor_hora_normal;
}

console.log("O valor do salário é: " + salario);
