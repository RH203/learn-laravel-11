<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD - Laravel 11</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="container mx-auto my-3.5 bg-gray-100 rounded-md">
    <div class="flex justify-between px-4 py-4">
      <header class="max-w-sm">
        <h1 class="font-bold text-2xl">Management User</h1>
      </header>

      <div class="grid grid-cols-2 gap-3 max-w-sm">
        <button type="button"
          class="py-3 px-4 inline-flex items-center justify-evenly gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Add user
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path
              d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
          </svg>

        </button>
        <button type="button"
          class="py-3 px-4 inline-flex items-center justify-evenly gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Delete all
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 text-red-500">
            <path fill-rule="evenodd"
              d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>

    <hr class="border-gray-500 mx-6">

    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="border rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3 ps-4">
                    <div class="flex items-center h-5">
                      <input id="hs-table-checkbox-all" type="checkbox"
                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                      <label for="hs-table-checkbox-all" class="sr-only">Checkbox</label>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Age</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Address
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Salary
                  </th>
                  <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                <tr>
                  <td class="py-3 ps-4">
                    <div class="flex items-center h-5">
                      <input id="hs-table-checkbox-1" type="checkbox"
                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                      <label for="hs-table-checkbox-1" class="sr-only">Checkbox</label>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">John Brown</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1 Lake Park</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp. 200.000.000</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button"
                      class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td class="py-3 ps-4">
                    <div class="flex items-center h-5">
                      <input id="hs-table-checkbox-2" type="checkbox"
                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                      <label for="hs-table-checkbox-2" class="sr-only">Checkbox</label>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Jim Green</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">27</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">London No. 1 Lake Park</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp. 200.000.000</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button"
                      class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td class="py-3 ps-4">
                    <div class="flex items-center h-5">
                      <input id="hs-table-checkbox-3" type="checkbox"
                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                      <label for="hs-table-checkbox-3" class="sr-only">Checkbox</label>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Joe Black</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">31</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Sidney No. 1 Lake Park</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp. 200.000.000</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button"
                      class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td class="py-3 ps-4">
                    <div class="flex items-center h-5">
                      <input id="hs-table-checkbox-4" type="checkbox"
                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                      <label for="hs-table-checkbox-4" class="sr-only">Checkbox</label>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Edward King</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">16</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">LA No. 1 Lake Park</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp. 200.000.000</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button"
                      class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td class="py-3 ps-4">
                    <div class="flex items-center h-5">
                      <input id="hs-table-checkbox-5" type="checkbox"
                        class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                      <label for="hs-table-checkbox-5" class="sr-only">Checkbox</label>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Jim Red</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Melbourne No. 1 Lake Park</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp. 200.000.000</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button"
                      class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



  </div>
  <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
