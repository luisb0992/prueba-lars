/**
 * Manipulación de las urls de cada pagina principal
 *
 * @author Luisbardev <luisbardev@gmail.com> luisbardev.com
 */
import { ref } from "vue";

const appPages = ref({
    dashboard: "/dashboard",
    orders: "/orders",
});

export default appPages;