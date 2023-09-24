export { };

declare global {
  interface Window {
    axios: any; // 👈️ turn off type checking
  }
}