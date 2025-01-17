function celsiusToFahrenheit(celsius) {
   
    const fahrenheit = celsius * (9 / 5) + 32;
    return fahrenheit;
}

const temperaturaCelsius = 30;
const temperaturaFahrenheit = celsiusToFahrenheit(temperaturaCelsius);
console.log(`${temperaturaCelsius}°C é igual a ${temperaturaFahrenheit}°F.`);