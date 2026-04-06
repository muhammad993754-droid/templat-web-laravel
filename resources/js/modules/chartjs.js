// Usage: https://www.chartjs.org/
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

Chart.defaults.color = window.theme ? window.theme["gray-600"] : "#495057";
Chart.defaults.font.family = "'Inter', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif";

window.Chart = Chart;