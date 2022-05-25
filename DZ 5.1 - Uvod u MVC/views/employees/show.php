<div class="container">
    <h3>Here is a full details of the employee <?php $employee->firstName ?></h3>
    <p>
        Full name: <?php echo $employee->firstName . ' ' . $employee->lastName; ?>
    </p>
    <p>
        Birth date: <?php echo $employee->birthDate; ?>
    </p>
    <p>
        Gender: <?php echo $employee->gender; ?>
    </p>
    <p>
        Hire date: <?php echo $employee->hireDate; ?>
    </p>
    <p>
        Department: <?php echo $employee->departmentName; ?>
    </p>
</div>