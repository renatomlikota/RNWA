const { GraphQLString } = require('graphql');
const { dbQuery } = require('../../database');
const { DepartmentType } = require('../../types');

const insertDepartment = {
  type: DepartmentType,
  args: {
    name: { type: GraphQLString },
    description: { type: GraphQLString }
  },
  async resolve(_, { name, description }){
    let res = await dbQuery(`Insert into employee_department (name, description) values ('${name}', '${description}')`);
    return { id: res.insertId, name, description }
  }
};

module.exports = insertDepartment;