
/**
 * @param {MessageEvent} evt mensaje recibido de la interfaz gráfica. La
 * property data tiene los datos enviados con hilo.postMessage(modelo). */
onmessage = evt => {
  // Calcula y envía de regreso la respuesta a la interfaz gráfica.
  // @ts-ignore
  postMessage(`Tu Nombre es ${evt.data.nom} Tu Área es ${evt.data.area}`);
};
