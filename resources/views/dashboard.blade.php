<x-app-layout>
  <div class="container flex min-h-screen">
    <div
      class="fixed-top sidebar-container w-[240px] bg-white shadow-lg h-screen fixed top-0 left-0 py-6 px-4 font-[sans-serif] overflow-auto">
      <nav>
        <ul>
          <li>
            <a href="{{ route('dashboard') }}"
              class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
              Dashboard
            </a>
          </li>
        </ul>
        <div class="mt-4">
          <h6 class="text-blue-600 text-sm font-bold px-4">PRODUCTS</h6>
          <ul class="mt-2">
            <li>
              <a href="{{ route('product.read') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Products
              </a>
            </li>
            <li>
              <a href="{{ route('products.insert') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Add Product
              </a>
            </li>

          </ul>
        </div>
        <div class="mt-4">
          <h6 class="text-blue-600 text-sm font-bold px-4">CUSTOMER</h6>
          <ul class="mt-2">
            <li>
              <a href="{{ route('customer.read') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Customer
              </a>
            </li>
            <li>
              <a href="{{ route('customer.create') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Add Customer
              </a>
            </li>

          </ul>
        </div>
        <div class="mt-4">
          <h6 class="text-blue-600 text-sm font-bold px-4">Employee</h6>
          <ul class="mt-2">
            <li>
              <a href="{{ route('employee.read') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Employee
              </a>
            </li>
            <li>
              <a href="{{ route('employee.create') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Add Employee
              </a>
            </li>

          </ul>
        </div>
        <div class="mt-4">
          <h6 class="text-blue-600 text-sm font-bold px-4">ُSales</h6>
          <ul class="mt-2">
            <li>
              <a href="{{ route('sales.read') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Sales
              </a>
            </li>
            <li>
              <a href="{{ route('sales.create') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Add Sales
              </a>
            </li>

          </ul>
        </div>
        <div class="mt-4">
          <h6 class="text-blue-600 text-sm font-bold px-4">Supplier</h6>
          <ul class="mt-2">
            <li>
              <a href="{{ route('supplier.read') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Supplier
              </a>
            </li>
            <li>
              <a href="{{ route('supplier.create') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Add Supplier
              </a>
            </li>

          </ul>
        </div>
        <div class="mt-4">
          <h6 class="text-blue-600 text-sm font-bold px-4">Sales Item</h6>
          <ul class="mt-2">
            <li>
              <a href="{{ route('salesitem.read') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Sales Item
              </a>
            </li>
            <li>
              <a href="{{ route('salesitem.create') }}"
                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                Add Sales Item
              </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>

    <!-- Table Container -->
    <div class="table-container flex-1 p-5 ml-[240px]">
      <div class="m-5 pl-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-white border-b border-gray-200">
            <tr>
              <th scope="col" class="px-6 py-3">
                Product name
              </th>
              <th scope="col" class="px-6 py-3">
                Color
              </th>
              <th scope="col" class="px-6 py-3">
                Category
              </th>
              <th scope="col" class="px-6 py-3">
                Price
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white border-b border-gray-200">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Apple MacBook Pro 17"
              </th>
              <td class="px-6 py-4">
                Silver
              </td>
              <td class="px-6 py-4">
                Laptop
              </td>
              <td class="px-6 py-4">
                $2999
              </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Microsoft Surface Pro
              </th>
              <td class="px-6 py-4">
                White
              </td>
              <td class="px-6 py-4">
                Laptop PC
              </td>
              <td class="px-6 py-4">
                $1999
              </td>
            </tr>
            <tr class="bg-white">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Magic Mouse 2
              </th>
              <td class="px-6 py-4">
                Black
              </td>
              <td class="px-6 py-4">
                Accessories
              </td>
              <td class="px-6 py-4">
                $99
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</x-app-layout>