<x-app-layout>
  {{-- Contenedor general con padding y centrado --}}
  <div class="p-6 bg-gray-200 min-h-screen max-w-7xl mx-auto">
    {{-- Título principal --}}
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Panel</h1>

    {{-- Tarjetas métricas con conteo de eventos --}}
    <div class="flex flex-wrap sm:flex-nowrap gap-4 mb-6">

      {{-- Eventos Asistidos --}}
      <div class="w-full sm:w-1/3 bg-white rounded-lg shadow p-6 text-center transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-red-700">
        <p class="text-sm text-gray-500">Eventos Asistidos</p>
        <p class="text-3xl font-bold text-red-700">12</p>
      </div>

      {{-- Eventos No Asistidos --}}
      <div class="w-full sm:w-1/3 bg-white rounded-lg shadow p-6 text-center transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-red-700">
        <p class="text-sm text-gray-500">Eventos No Asistidos</p>
        <p class="text-3xl font-bold text-red-700">3</p>
      </div>

      {{-- Total Eventos --}}
      <div class="w-full sm:w-1/3 bg-white rounded-lg shadow p-6 text-center transition-transform transform hover:-translate-y-1 duration-300 border border-transparent hover:border-red-700">
        <p class="text-sm text-gray-500">Total Eventos</p>
        <p class="text-3xl font-bold text-red-700">15</p>
      </div>
    </div>

    {{-- Tabla de eventos con modal de filtro --}}
    <div x-data="{
        mostrarModal: false,
        filtros: {
          nombre: '', fecha: '', hora: '', lugar: '', tipo: '', asistio: ''
        }
      }" class="bg-white rounded-xl shadow p-6">

      {{-- Encabezado de la tabla --}}
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray-700">Últimos Eventos</h2>

        {{-- Botón para abrir el modal --}}
        <button 
          @click="mostrarModal = true"
          class="bg-red-700 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">
          Buscar con filtros
        </button>
      </div>

      {{-- Modal de filtros --}}
      <div x-show="mostrarModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg w-full max-w-xl p-6 shadow-lg">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Búsqueda de Eventos</h2>
            {{-- Botón cerrar modal --}}
            <button @click="mostrarModal = false" class="text-gray-600 hover:text-red-700 text-xl">&times;</button>
          </div>

          {{-- Campos de filtro --}}
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <input type="text" x-model="filtros.nombre" placeholder="Nombre del evento" class="border rounded px-3 py-2 text-sm">
            <input type="date" x-model="filtros.fecha" class="border rounded px-3 py-2 text-sm">
            <input type="text" x-model="filtros.hora" placeholder="Hora" class="border rounded px-3 py-2 text-sm">
            <input type="text" x-model="filtros.lugar" placeholder="Lugar" class="border rounded px-3 py-2 text-sm">
            <input type="text" x-model="filtros.tipo" placeholder="Tipo" class="border rounded px-3 py-2 text-sm">
            <select x-model="filtros.asistio" class="border rounded px-3 py-2 text-sm">
              <option value="">Asistencia</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>

          {{-- Botones del modal --}}
          <div class="mt-6 flex justify-end">
            {{-- Cancelar: limpia filtros y cierra modal --}}
            <button 
              @click="filtros = { nombre: '', fecha: '', hora: '', lugar: '', tipo: '', asistio: '' }; mostrarModal = false"
              class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded mr-2">
              Cancelar
            </button>

            {{-- Aplicar: solo cierra modal, filtros ya están activos --}}
            <button @click="mostrarModal = false" class="bg-red-700 hover:bg-red-700 text-white px-4 py-2 rounded">Aplicar Filtros</button>
          </div>
        </div>
      </div>

      {{-- Tabla con scroll vertical si se llena --}}
      <div class="w-full max-w-full overflow-x-auto mt-4 max-h-[400px] overflow-y-auto rounded-lg">
        <table class="min-w-[700px] w-full text-sm text-left border border-gray-200">
          <thead class="bg-red-700 text-white">
            <tr>
              <th class="px-4 py-2 text-center">ID</th>
              <th class="px-4 py-2">Nombre</th>
              <th class="px-4 py-2">Fecha</th>
              <th class="px-4 py-2">Hora</th>
              <th class="px-4 py-2">Lugar</th>
              <th class="px-4 py-2">Tipo</th>
              <th class="px-4 py-2 text-center">Asistió</th>
            </tr>
          </thead>
          <tbody>
            <!-- FILA 1 -->
            <tr class="hover:bg-gray-50 transition-colors"
                x-show="
                  (filtros.nombre === '' || 'Congreso Web Internacional de Tecnología Digital'.toLowerCase().includes(filtros.nombre.toLowerCase())) &&
                  (filtros.fecha === '' || '2025-06-15'.includes(filtros.fecha)) &&
                  (filtros.hora === '' || '10:00 AM'.toLowerCase().includes(filtros.hora.toLowerCase())) &&
                  (filtros.lugar === '' || 'Auditorio Principal del Centro de Convenciones Internacional'.toLowerCase().includes(filtros.lugar.toLowerCase())) &&
                  (filtros.tipo === '' || 'Conferencia'.toLowerCase().includes(filtros.tipo.toLowerCase())) &&
                  (filtros.asistio === '' || 'Sí'.includes(filtros.asistio))
                ">
              <td class="border px-4 py-2 text-center">1</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden" title="Congreso Web Internacional de Tecnología Digital">
                Congreso Web Internacional de Tecnología Digital
              </td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">2025-06-15</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">10:00 AM</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden" title="Auditorio Principal del Centro de Convenciones Internacional">
                Auditorio Principal del Centro de Convenciones Internacional
              </td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">Conferencia</td>
              <td class="border px-4 py-2 text-center">
                <span class="inline-block px-4 py-1 rounded-2xl bg-green-200 text-green-700 text-xs font-semibold">Sí</span>
              </td>
            </tr>

            <!-- FILA 2 -->
            <tr class="hover:bg-gray-50 transition-colors"
                x-show="
                  (filtros.nombre === '' || 'ExpoTech'.toLowerCase().includes(filtros.nombre.toLowerCase())) &&
                  (filtros.fecha === '' || '2025-06-20'.includes(filtros.fecha)) &&
                  (filtros.hora === '' || '2:00 PM'.toLowerCase().includes(filtros.hora.toLowerCase())) &&
                  (filtros.lugar === '' || 'Salón 3'.toLowerCase().includes(filtros.lugar.toLowerCase())) &&
                  (filtros.tipo === '' || 'Taller'.toLowerCase().includes(filtros.tipo.toLowerCase())) &&
                  (filtros.asistio === '' || 'No'.includes(filtros.asistio))
                ">
              <td class="border px-4 py-2 text-center">2</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">ExpoTech</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">2025-06-20</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">2:00 PM</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">Salón 3</td>
              <td class="border px-4 py-2 max-w-[200px] whitespace-normal break-words sm:truncate sm:whitespace-nowrap sm:overflow-hidden">Taller</td>
              <td class="border px-4 py-2 text-center">
                <span class="inline-block px-4 py-1 rounded-2xl bg-red-200 text-red-700 text-xs font-semibold">No</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>





