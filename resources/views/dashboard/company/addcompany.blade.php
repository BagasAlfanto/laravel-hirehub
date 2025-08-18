<x-company.addcompany>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center bg-light">
        <div class="card shadow-lg border-0" style="width: 32rem;">
            <div class="card-header bg-primary text-white text-center rounded-top">
                <h3 class="mb-0 fw-bold">Add New Company</h3>
                <small class="text-light">Fill in the details below to register your company</small>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Company Name --}}
                    <div class="mb-3">
                        <label for="company_name" class="form-label fw-bold">Company Name</label>
                        <input type="text" class="form-control shadow-sm" id="company_name" name="company_name" required placeholder="Enter company name">
                    </div>

                    {{-- Company Email --}}
                    <div class="mb-3">
                        <label for="company_email" class="form-label fw-bold">Company Email</label>
                        <input type="email" class="form-control shadow-sm" id="company_email" name="company_email" required placeholder="example@company.com">
                    </div>

                    {{-- Company Phone --}}
                    <div class="mb-3">
                        <label for="company_phone" class="form-label fw-bold">Company Phone</label>
                        <input type="text" class="form-control shadow-sm" id="company_phone" name="company_phone" placeholder="e.g. +62 812 3456 7890">
                    </div>

                    {{-- Company Field --}}
                    <div class="mb-3">
                        <label for="company_field" class="form-label fw-bold">Industry / Field</label>
                        <input type="text" class="form-control shadow-sm" id="company_field" name="company_field" placeholder="e.g. Technology, Finance">
                    </div>

                    {{-- Company Address --}}
                    <div class="mb-3">
                        <label for="company_address" class="form-label fw-bold">Address</label>
                        <textarea class="form-control shadow-sm" id="company_address" name="company_address" rows="2" placeholder="Company address"></textarea>
                    </div>

                    {{-- Company Website --}}
                    <div class="mb-3">
                        <label for="company_website" class="form-label fw-bold">Website</label>
                        <input type="url" class="form-control shadow-sm" id="company_website" name="company_website" placeholder="https://example.com">
                    </div>

                    {{-- Company Description --}}
                    <div class="mb-3">
                        <label for="company_description" class="form-label fw-bold">Description</label>
                        <textarea class="form-control shadow-sm" id="company_description" name="company_description" rows="3" placeholder="Tell us about your company"></textarea>
                    </div>

                    {{-- Company Logo --}}
                    <div class="mb-4">
                        <label for="company_logo" class="form-label fw-bold">Logo</label>
                        <input type="file" class="form-control shadow-sm" id="company_logo" name="company_logo" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold shadow">Add Company</button>
                </form>
            </div>
        </div>
    </div>

</x-company.addcompany>
