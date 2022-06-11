const { GraphQLList } = require('graphql');
const { dbQuery } = require('../../database');
const { DepartmentType } = require('../../types');

const fieldsDepartments = {
  type: new GraphQLList(DepartmentType),
  async resolve(_, {}){
    let res = await dbQuery(`SELECT * FROM employee_department`);

    return res;
  }
};

module.exports = fieldsDepartments;
