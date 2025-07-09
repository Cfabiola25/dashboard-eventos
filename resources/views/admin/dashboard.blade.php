<x-app-layout>
  <div class="p-6 bg-gray-200 min-h-screen max-w-7xl mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Panel Administrativo</h1>

    {{-- Tarjetas métricas --}}
    <div class="flex flex-wrap sm:flex-nowrap gap-4 mb-6">
      <!-- Tarjeta 1 -->
      <div class="w-full sm:w-1/3 bg-white rounded-lg shadow p-6 text-center transform transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-lg">
        <p class="text-sm text-gray-500">Eventos Asistidos</p>
        <p class="text-3xl font-bold text-red-700">12</p>
      </div>
      <!-- Tarjeta 2 -->
      <div class="w-full sm:w-1/3 bg-white rounded-lg shadow p-6 text-center transform transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-lg">
        <p class="text-sm text-gray-500">Eventos No Asistidos</p>
        <p class="text-3xl font-bold text-red-700">3</p>
      </div>
      <!-- Tarjeta 3 -->
      <div class="w-full sm:w-1/3 bg-white rounded-lg shadow p-6 text-center transform transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-lg">
        <p class="text-sm text-gray-500">Total Eventos</p>
        <p class="text-3xl font-bold text-red-700">15</p>
      </div>
    </div>

    {{-- Tabla de eventos --}}
    <div class="bg-white rounded-xl shadow p-6">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray-700">Últimos Eventos</h2>
        <input type="text" placeholder="Buscar..." class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-red-200">
      </div>

      {{-- CONTENEDOR que NO SE SALE --}}
      <div class="w-full max-w-full overflow-x-auto">
        <table class="min-w-[700px] w-full text-sm text-left border border-gray-200">
          <thead class="bg-red-700 text-white">
            <tr>
              <th class="border px-4 py-2">ID</th>
              <th class="border px-4 py-2">Nombre</th>
              <th class="border px-4 py-2">Fecha</th>
              <th class="border px-4 py-2">Hora</th>
              <th class="border px-4 py-2">Lugar</th>
              <th class="border px-4 py-2">Tipo</th>
              <th class="border px-4 py-2">Asistió</th>
            </tr>
          </thead>
        <tbody>
        <tr class="hover:bg-gray-50 transition-colors">
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">Congreso Web</td>
            <td class="border px-4 py-2">2025-06-15</td>
            <td class="border px-4 py-2">10:00 AM</td>
            <td class="border px-4 py-2">Auditorio A</td>
            <td class="border px-4 py-2">Conferencia</td>
            <td class="border px-4 py-2 text-center">
            <span class="inline-block px-4 py-1 rounded-md bg-green-700 text-white text-xs font-semibold">Sí</span>
            </td>
        </tr>
        <tr class="hover:bg-gray-50 transition-colors">
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">ExpoTech</td>
            <td class="border px-4 py-2">2025-06-20</td>
            <td class="border px-4 py-2">2:00 PM</td>
            <td class="border px-4 py-2">Salón 3</td>
            <td class="border px-4 py-2">Taller</td>
            <td class="border px-4 py-2 text-center">
            <span class="inline-block px-4 py-1 rounded-md bg-red-700 text-white text-xs font-semibold">No</span>
            </td>
        </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>
