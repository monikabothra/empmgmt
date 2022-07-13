<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="mb-3">Add Employee Details</h1>
								<!--end::Title-->	
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
                            <form method="post" action="/employee" enctype="multipart/form-data">
                                @csrf
							<div class="row g-9 mb-5">
								<div class="col-md-6 fv-row">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Name</span>
								</label>
								<input type="text" class="form-control form-control-solid" placeholder="Enter Name" name="empname" />
								</div>
								<div class="col-md-6 fv-row">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Mobile No.</span>
								</label>
								<input type="text" class="form-control form-control-solid" placeholder="Enter Number" name="empnumber" />
							</div>
							<div class="col-md-6 fv-row">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Email</span>
								</label>
								<input type="text" class="form-control form-control-solid" placeholder="Enter Email" name="empemail" />
							</div>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<div class="col-md-12 fv-row">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Address</span>
								</label>
								<input type="text" class="form-control form-control-solid" placeholder="Enter Address" name="empaddress" />
								</div>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Qualification</label>
									<input type="text" class="form-control form-control-solid" placeholder="Enter Qualification" name="empqualification" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Date of Birth</label>
									<!--begin::Input-->
										<input type="date" class="form-control form-control-solid " placeholder="Select a date" name="empdob" />
									<!--end::Input-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Key Skills</label>
											<input class="form-control form-control-solid " placeholder="Key Skills" name="empkeyskills" />	
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<label class="required fs-6 fw-bold mb-2">Marital Status</label>
										<select class="form-select form-select-solid"  name="empstatus">
											<option selected disabled>Select...</option>
											<option value="1">Married</option>
											<option value="2">Unmarried</option>	
										  </select>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<div class="col-md-6 fv-row">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Father/Husband </span>
								</label>
								<input type="text" class="form-control form-control-solid" placeholder="Enter Name" name="fhname" />
								</div>
								<div class="col-md-6 fv-row">
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">His Contact</span>
								</label>
								<input type="text" class="form-control form-control-solid" placeholder="Enter Number" name="hisnumber" />
							</div>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Date of Joining</label>
									<!--begin::Input-->
										<input type="date" class="form-control form-control-solid " placeholder="Select a date" name="empdoj" />
									<!--end::Input-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Branch</label>
									<select class="form-select form-select-solid"  name="empbranch">
										<option selected disabled>Select Branch</option>
										<option value="1">Bikaner</option>
										<option value="2">Vizag</option>	
										<option value="3">Raipur</option>
									
									  </select>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Employment field</label>
									<select class="form-select form-select-solid"  name="empfield">
										<option selected disabled>Select Field</option>
										<option value="1">Office</option>
										<option value="2">Khet</option>	
										<option value="3">Site</option>
									  </select>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Department</label>
									<select class="form-select form-select-solid"  name="empdpt">
										<option selected disabled>Select Department</option>
										<option value="1">IT</option>
										<option value="2">Operator</option>	
									  </select>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Position</label>
									<input type="text" class="form-control form-control-solid " placeholder="Enter Position" name="empposition" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Basic Salary</label>
									<input type="text" class="form-control form-control-solid " placeholder="Enter Salary" name="empsalary" />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<div class="row g-9 mb-5">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Office In</label>
									<input type="text" class="form-control form-control-solid " placeholder="Enter In Time" name="empin" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Office Out</label>
									<input type="text" class="form-control form-control-solid " placeholder="Enter Out Time" name="empout" />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Picture</label>
									<input type="file" class="form-control form-control-solid " placeholder="Enter Picture" name="photo" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="fs-6 fw-bold mb-2">Remarks</label>
								<textarea class="form-control form-control-solid" rows="2" name="remarks" placeholder="Remarks..."></textarea>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
		
							<!--begin::Actions-->
							<div class="text-center">
								<button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
								<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
							</div>
							<!--end::Actions-->
						</form>
</body>
</html>